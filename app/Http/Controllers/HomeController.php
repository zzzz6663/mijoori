<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\City;
use App\Models\User;
use App\Models\Travel;
use App\Models\Province;
use App\Models\Adventure;
use Illuminate\Http\Request;
use App\Notifications\SendKaveCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public  function  clear()
    {
   Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('optimize:clear');
        Artisan::call('config:clear');
        Artisan::call('optimize');
    }
    public  function  logout()
    {
        alert()->success('خروج با موفقیت انجام شد ');
        Auth::logout();
        return redirect()->route('login');
    }
    public function guides (Request $request){
        $guides = User::query();
        if ($request->guid) {
            $search = $request->search;
            // $guides->where('name', 'LIKE', "%{$search}%")
            //     ->orWhereHas('province', function ($query) use ($search) {
            //         $query->where('name', 'LIKE', "%{$search}%");
            //     });

        }
        if($request->city){
          $guides->whereHas('city', function ($query) use ($request) {
            $query->where('name',$request->city);
          });
        }
        $guides = $guides->whereLevel('customer')->whereGuid('1')->whereActive('1')->get();
        return view('home.guides',compact('guides'));
    }
    public function index (){

        // $mobile= session()->get('mobile');
        // $user=User::create(['mobile'=>$mobile,'level'=>'customer']);

        $invitedUser = new User;
        // $invitedUser->notify(new SendKaveCode( '09373699317','login','1212','','','',''));
$guids=User::whereLevel('customer')->where('guid','1')->where('active','1')->latest()->get();
$provinces=Province::all();
// $provinces=Province::whereHas('users',function($query) {
//     $query->where('guid','1')->where('active','1');

// })->get();
        $user= auth()->user();

        return view('home.index',compact('user','guids','provinces'));
    }
    public function send_verify_code (Request $request){
        //            ارسال پیامک
        $digits = 4;
        $rand= rand(pow(10, $digits-1), pow(10, $digits)-1);
        session()->put('mobile',$request->mobile);
        $invitedUser = new User;
        $invitedUser->notify(new SendKaveCode( $request->mobile,'login',$rand,'','','',''));
        return response()->json([
            'status'=>'ok',
            'code'=>$rand,
            'mobile'=>$request->mobile
        ]);
    }
    public function auth_login (Request $request){
        $mobile= session()->get('mobile');
        $user=User::whereMobile($mobile)->first();
        if(!$user){

            $user=User::create(['mobile'=>$mobile,'level'=>'customer']);
            $user->assignRole( 'customer');

        }
        Auth::login($user,true);
        return response()->json([
            'status'=>$user->complete_register,
        ]);
    }

    public function get_city(Province $province){
        return response()->json([
            'body' => view('home.parts.get_city',compact('province'))->render(),
        ]);
    }



    public function new_adventure1(Request $request, Adventure $adventure){
        $user=auth()->user();
        if ( $request->isMethod('post')) {
           $data=$request->validate([
                    'cat'=>"required",
                    'hardness'=>"required",
                    'members'=>"required|integer|between:1,50",
                    'city_id'=>"required|exists:cities,id",
                    'name'=>"required|string|min:5",
                    'short'=>"nullable|string|min:5",
                    'action_include'=>"nullable|string|min:5",
                    'action_not_include'=>"nullable|string|min:5",
                    'images'=>"nullable",
           ]);
           $data['province_id']=City::find($data['city_id'])->province->id;
           $data['stage']=2;
           $data['confirm']=0;
           if($adventure->id){
          $adventure->update($data);
            if ($files= $request->file('images')) {
             foreach($files as $file){
                 $name_img = 'adventure_' . $adventure->id.'_'.time() . '.' . $file->getClientOriginalExtension();
                 $file->move(public_path('/media/adventure/'), $name_img);
                 $images[]=$name_img;
                 $user->images()->create([
                     'image'=> $name_img,
                     'imageable_id'=>     $adventure->id,
                     'imageable_type'=>     get_class($adventure),
                 ]);
             }
           }
           }else{
            $adventure= $user->adventures()->create($data);

            if ($files= $request->file('images')) {
             foreach($files as $file){
                 $name_img = 'adventure_' . $adventure->id.'_'.rand ( 10000 , 99999 ) . '.' . $file->getClientOriginalExtension();
                 $file->move(public_path('/media/adventure/'), $name_img);
                 $images[]=$name_img;
                 $user->images()->create([
                     'image'=> $name_img,
                     'imageable_id'=>     $adventure->id,
                     'imageable_type'=>     get_class($adventure),
                 ]);
             }
           }
           }
          alert()->success('اطلاعات با موفقیت ثبت شد ');
          return redirect()->route('new.adventure2',[$adventure->id]);
        }
        return view('home.new_adventure1',compact(['user','adventure']));
    }


    public function new_adventure2(Request $request, Adventure $adventure){

        $user=auth()->user();
        if ( $request->isMethod('post')) {
           $data=$request->validate([
                    'location'=>"required|max:256",
                    'period'=>"nullable|max:256",
                    'type_period'=>"nullable|max:256",
                    'time_period'=>"required|max:256",
           ]);
           $data['stage']=3;
           $data['confirm']=0;
          $adventure->update($data);
          alert()->success('اطلاعات با موفقیت ثبت شد ');
          return redirect()->route('new.adventure3',[$adventure->id]);
          }

        return view('home.new_adventure2',compact(['adventure','user']));
    }
    public function new_adventure3(Request $request, Adventure $adventure){

        $user=auth()->user();
        if ( $request->isMethod('post')) {
           $data=$request->validate([
                    'count'=>"required|max:256",
                    'price'=>"required|integer|between:50000,5000000",
                    'facility'=>"nullable|max:500",
                    'benefit'=>"nullable|max:500",
                    'info'=>"nullable",
                    'more'=>"nullable",
                    'return_mony'=>"required",
           ]);
           $data['stage']=4;
           $data['confirm']=0;
          $adventure->update($data);
          alert()->success('اطلاعات با موفقیت ثبت شد ');
          return redirect()->route('new.adventure4',[$adventure->id]);
          }

        return view('home.new_adventure3',compact(['adventure','user']));
    }
    public function new_adventure4(Request $request, Adventure $adventure){

        $user=auth()->user();
        if ( $request->isMethod('post')) {
           $data=$request->validate([
                    'place'=>"required|max:500",
                    'address'=>"nullable|max:500",
                    'latitude'=>"nullable",
                    'longitude'=>"required",
                    'plan'=>"nullable",
           ]);
           $data['stage']=5;
           $data['confirm']=0;
          $adventure->update($data);
          alert()->success('اطلاعات با موفقیت ثبت شد ');
          return redirect()->route('my.adventures');
          }

        return view('home.new_adventure4',compact(['adventure','user']));
    }

    public function related_travel(Request $request){
        $user=auth()->user();
        $travels=$user->related_travel();
        return view('home.related_travel',compact(['travels','user']));
    }
    public function travel_chat(Request $request ,Travel $travel){
        $user=auth()->user();
        return view('home.travel_chat',compact(['travel','user']));
    }
    public function my_adventures(Request $request){
        $user=auth()->user();
        $adventures=$user->adventures()->latest()->get();
        return view('home.my_adventures',compact(['adventures','user']));
    }

    public function send_chat(Request $request)
    {
        $user = auth()->user();
        if( $user->id==$request->to){
            alert()->warning('شما نمیتوانید به خودتان پیام بدهید');
            return redirect()->route('related.chat',$request->travel);
        }
        $request->validate([
            'chat'=>'required|min:3'
        ]);
        Chat::create(
            [
                'from_id'=>$user->id,
                'type' => 'text',
                'to_id' => $request->to,
                'chat' =>  $request->chat,
                'travel_id' => $request->travel,
            ]
            );

        $data = ['from_id' => $user->id, 'to_id' => $request->to ]; // sending from and to user id when pressed enter
        alert()->success('پیام با موفقیت ثبت شد ');
        return redirect()->route('related.chat',$request->travel);

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Notifications\SendKaveCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public  function  logout()
    {
        alert()->success('خروج با موفقیت انجام شد ');
        Auth::logout();
        return redirect()->route('login');
    }
    public function index (){
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        // $mobile= session()->get('mobile');
        // $user=User::create(['mobile'=>$mobile,'level'=>'customer']);


        $invitedUser = new User;
        // $invitedUser->notify(new SendKaveCode( '09373699317','login','1212','','','',''));



        return view('home.index');
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
}

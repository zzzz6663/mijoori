<?php

namespace App\Http\Controllers\admin;

use App\Models\Chat;
use App\Models\City;
use App\Models\User;
use App\Models\Travel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::query();
        if ($request->search) {
            $search = $request->search;
           $users->where(function ($query) use ($search, $users) {
                $users->where('name', 'LIKE', "%{$search}%")
                ->orWhere('family', 'LIKE', "%{$search}%")
                ->orWhere('code', 'LIKE', "%{$search}%")
                ->orWhere('mobile', 'LIKE', "%{$search}%")
                ->orWhere('shaba', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhereHas('province', function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                })
                ->orWhereHas('city', function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                });
           });
        }
        if(isset($request->guid) ){
            $users->where('guid',$request->guid);
        }
        if(isset($request->active) ){
            $users->where('active',$request->active);
        }
        if(isset($request->have_travel)){
            $users->whereHas('travels',function ($query) {

            });
        }
        $users = $users->whereIn('level', ['customer'])->latest()->paginate(10);
        return view('admin.users.all', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact(['user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data=$request->validate([
            'name' => 'nullable',
            'family' => 'nullable',
            'mobile' => 'nullable|unique:users,mobile,' . $user->id,
            'email' => 'nullable|unique:users,email,' . $user->id,
            'gender' => 'nullable',
            'b_date' => 'nullable',
            'province_id' => 'nullable',
            'city_id' => 'nullable',
            'code' => 'nullable|min:10|max:10|unique:users,code,' . $user->id,
            'shaba' => 'nullable|min:24|max:24|unique:users,code,' . $user->id,
            'address' => 'nullable',
        ]);
        if($request->b_date){
            $data['b_date'] = $user->convert_date($data['b_date']);
        }
        $user->update($data);
        alert()->success();
return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function active_guid(User $user)
    {
        if (!$user->guid) {
            alert()->error('این کاربر هنوز در خواست راهنما نداده است ');
        }
        if ($user->active) {
            $user->update(['active' => 0]);
            alert()->success('کاربر غیر فعال شد ');
        } else {
            $user->update(['active' => 1]);
            alert()->success('کاربر  فعال شد ');
        }
        return back();
    }


    public function user_basic_info_update(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'family' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
            'province_id' => 'required',
            'b_date' => 'required',
            'city_id' => 'required',
            'password' => 'required|digits:4',
            'avatar' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $data = $validator->safe()->all();
        $data['b_date'] = $user->convert_date($data['b_date']);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $name_img = 'avatar_' . $user->id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/media/avatar/'), $name_img);
            $path = public_path('/media/avatar/' . $name_img);
            if (file_exists($path)) {
                Image::make($path)->fit(353, 468)->save(public_path('/media/avatar/' . $name_img));
                Image::make($path)->fit(300, 300)->save(public_path('/media/avatar/square' . $name_img));
            }
            $data['avatar'] = $name_img;
        }
        $data['complete_register'] = '1';
        $user->update($data);
        return response()->json([
            'all' => $request->all(),
            'status' => 'ok',

        ]);
    }
    public function be_guid_form_1(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'address' => 'nullable|min:20|max:1500',
            'code' => 'nullable|min:10|max:10|unique:users,code,' . $user->id,
            'shaba' => 'nullable|min:24|max:24|unique:users,code,' . $user->id,
            'p_avatar' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $data = $validator->safe()->all();
        if ($request->hasFile('p_avatar')) {
            $avatar = $request->file('p_avatar');
            $name_img = 'p_avatar_' . $user->id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/media/p_avatar/'), $name_img);
            $data['p_avatar'] = $name_img;
        }
        $user->update($data);
        return response()->json([
            'all' => $request->all(),
            'status' => 'ok',
        ]);
    }
    public function be_guid_form_2(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'melli_front' => 'nullable',
            'melli_back' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $data = $validator->safe()->all();
        if ($request->hasFile('melli_front')) {
            $avatar = $request->file('melli_front');
            $name_img = 'melli_front_' . $user->id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/media/melli_front/'), $name_img);
            $data['melli_front'] = $name_img;
        }
        if ($request->hasFile('melli_back')) {
            $avatar = $request->file('melli_back');
            $name_img = 'melli_back_' . $user->id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/media/melli_back/'), $name_img);
            $data['melli_back'] = $name_img;
        }
        $user->update($data);
        return response()->json([
            'all' => $request->all(),
            'status' => 'ok',
        ]);
    }


    public function be_guid_form_3(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'tourism' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $data = $validator->safe()->all();
        if ($request->hasFile('tourism')) {
            $avatar = $request->file('tourism');
            $name_img = 'tourism_' . $user->id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/media/tourism/'), $name_img);
            $data['tourism'] = $name_img;
        }
        $data['guid'] = 1;
        $user->update($data);
        return response()->json([
            'all' => $request->all(),
            'status' => 'ok',
        ]);
    }
    public function private_travel(Request $request)
    {
        $user = auth()->user();

        $validator = Validator::make($request->all(), [
            'start' => 'required',
            'end' => 'required',
            'count' => 'required',
            'duration' => 'required',
            'host_id' => 'required',
            'visit' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $data = $validator->safe()->all();

        $host=User::find($data['host_id']);

        $data['province_id']=$host->province->id;
        $data['type']='private';
        $data['gender']=$host->gender;
        $data['city_id']=$host->city->id;

        $data['start'] = $user->convert_date($data['start'],'/');

        $data['end'] = $user->convert_date($data['end'],'/');

        $travel=$user->travels()->create($data);

        Chat::create(
            [
                'from_id'=>$user->id,
                'type' => 'text',
                'to_id' => $host->id,
                'chat' =>  $request->message,
                'travel_id' => $travel->id,
            ]
            );
        return response()->json([
            'all' => $request->all(),
            'status' => 'ok',
        ]);
    }
    public function new_travel(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'city_id' => 'required|exists:cities,name',
            'start' => 'required',
            'end' => 'required',
            'count' => 'required',
            'gender' => 'required',
        ]);



        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $data = $validator->safe()->all();
        $data['province_id']=City::whereName( $data['city_id'] )->first()->province->id;
        $data['city_id']=City::whereName( $data['city_id'] )->first()->id;
        $data['start'] = $user->convert_date($data['start']);
        $data['end'] = $user->convert_date($data['end']);
        $data['type']='public';
        $user->travels()->create($data);
        return response()->json([
            'all' => $request->all(),
            'status' => 'ok',
        ]);
    }
    public function my_travels(Request $request)
    {
        $user= auth()->user();
        $travels=$user->travels()->latest()->get();
        return view('home.my_travels', compact(['user','travels']));
    }
    public function travel_active(Request $request ,Travel $travel)
    {
        $user= auth()->user();

        if($user->id != $travel->user->id){
            alert()->error('سازنده این سفر شما نیستید');
            return back();
        }
        if($travel->active){
            $travel->update(['active'=>'0']);
            alert()->success('سفر با موفقیت غیر فعال شد ');

        }else{
            $travel->update(['active'=>'1']);
            alert()->success('سفر با موفقیت  فعال شد ');
        }
     return redirect()->back();
    }
    public function travel_destroy(Request $request ,Travel $travel)
    {
        $user= auth()->user();

        if($user->id != $travel->user->id){
            alert()->error('سازنده این سفر شما نیستید');
            return back();
        }
        $travel->delete();
        alert()->success('سفر با موفقیت حذف شد');
     return redirect()->back();
    }




}

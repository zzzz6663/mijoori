<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use TimeHunter\LaravelGoogleReCaptchaV2\Validations\GoogleReCaptchaV2ValidationRule;

class AdminController extends Controller
{

    public function users(){
        return view('admin.users.all');
    }
    public function provinces(){
        return view('admin.provinces.all');
    }
   public function login(){
    $user=auth()->user();
    if($user){
        alert()->success('ورود با موفقیت نجام شد ');
        return redirect()->route('user.index');
    }
       return view('admin.auth.login');
   }
   public function check_login(Request $request){
       $data = $request->validate([
           'email' => 'required|email',
           'password' => 'required',
        //    'g-recaptcha-response' => [new GoogleReCaptchaV2ValidationRule()]
       ]);
       $user=User::whereEmail($request->email)->whereLevel('admin')->first();
       $user->assignRole('admin');
       if(!$user){
        alert()->error('   اطلاعات ارسال شده صحیح نمی باشد');
           return back();
       }

       if($user && $user->password == $request->password){
        Auth::login($user,true);
        alert()->success('   ورود با موفقیت انجام شد');

        return redirect()->route('user.index');
       }else{
        alert()->error('   اطلاعات ارسال شده صحیح نمی باشد');
        return back();
       }



   }
}

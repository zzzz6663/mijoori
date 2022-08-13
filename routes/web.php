<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->namespace('admin')->group(function () {
    // login admin
    Route::get('/login', 'AdminController@login')->name('admin.login');
    Route::post('/check_login', 'AdminController@check_login')->name('admin.check.login');
    Route::post('/user_basic_info_update', 'UserController@user_basic_info_update')->name('user.basic.info.update');
    Route::post('/be_guid_form_1', 'UserController@be_guid_form_1')->name('user.be.guid.form.1');
    Route::post('/be_guid_form_2', 'UserController@be_guid_form_2')->name('user.be.guid.form.2');
    Route::post('/be_guid_form_3', 'UserController@be_guid_form_3')->name('user.be.guid.form.3');
    Route::post('/new_travel', 'UserController@new_travel')->name('user.new.travel');
    Route::post('/private_travel', 'UserController@private_travel')->name('user.private.travel');
    // Route::post('/new_adventure', 'UserController@new_adventure')->name('user.new.adventure');
});

Route::namespace('admin')->middleware(['auth'])->group(function () {
    Route::get('/my_travels', 'UserController@my_travels')->name('user.my.travels');
    Route::get('/travel_active/{travel}', 'UserController@travel_active')->name('user.travel.active');
    Route::get('/travel_destroy/{travel}', 'UserController@travel_destroy')->name('user.travel.destroy');

});


Route::prefix('admin')->namespace('admin')->middleware(['auth'])->group(function () {
    // admin dashboard
    Route::get('/active_guid/{user}', 'UserController@active_guid')->name('user.active.guid')->middleware(['role:admin|manager|analyzer']);
    Route::resource('user', 'UserController')->middleware(['role:admin|manager|analyzer']);
    Route::resource('province', 'ProvinceController')->middleware(['role:admin|manager|analyzer']);

    Route::get('/adventure_confirm/{adventure}', 'AdventureController@adventure_confirm')->name('adventure.confirm')->middleware(['role:admin|manager']);
    Route::resource('adventure', 'AdventureController')->middleware(['role:admin|manager|analyzer']);
    Route::resource('city', 'CityController')->middleware(['role:admin|manager|analyzer']);
    Route::resource('agent', 'AgentController')->middleware(['role:admin|manager|analyzer']);

    Route::get('/travel_confirm/{travel}', 'TravelController@travel_confirm')->name('travel.confirm')->middleware(['role:admin|manager']);
    Route::resource('travel', 'TravelController')->middleware(['role:admin|manager|analyzer']);
    Route::resource('chat', 'ChatController')->middleware(['role:admin|manager|analyzer']);
});


Route::post('/get_city/{province}', 'HomeController@get_city');
Route::get('/clear', 'HomeController@clear')->name('clear');

//صفحات وب سایت
Route::get('/', 'HomeController@index')->name('login');
Route::get('/guides', 'HomeController@guides')->name('guides');
Route::get('/profile/{user}', 'HomeController@profile')->name('profile');
Route::get('/related_travel', 'HomeController@related_travel')->name('related.travel');
Route::any('/travel_chat/{travel}', 'HomeController@travel_chat')->name('related.chat');
Route::get('/all_cities', 'HomeController@all_cities')->name('all.cities');
Route::get('/single_city/{city}', 'HomeController@single_city')->name('single.city');
Route::post('/send_chat', 'HomeController@send_chat')->name('send.chat');
Route::get('/custom_travel', 'HomeController@custom_travel')->name('custom.travel');

Route::middleware(['auth'])->group(function () {
Route::get('/submit_rate/{travel}', 'HomeController@submit_rate')->name('submit.rate');
Route::get('/edit_profile/{user}', 'HomeController@edit_profile')->name('edit.profile');
});


//ثبت اطلاعات ماجراجویی جدید
Route::any('/new_adventure1/{adventure?}', 'HomeController@new_adventure1')->name('new.adventure1');
Route::any('/new_adventure2/{adventure}', 'HomeController@new_adventure2')->name('new.adventure2');
Route::any('/new_adventure3/{adventure}', 'HomeController@new_adventure3')->name('new.adventure3');
Route::any('/new_adventure4/{adventure}', 'HomeController@new_adventure4')->name('new.adventure4');
Route::get('/my_adventures', 'HomeController@my_adventures')->name('my.adventures');

// ورود و خروج
Route::post('/send_verify_code', 'HomeController@send_verify_code');
Route::post('/auth_login', 'HomeController@auth_login');
Route::get('/logout', 'HomeController@logout')->name('logout');



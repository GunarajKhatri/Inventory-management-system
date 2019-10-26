<?php

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
Auth::routes();
Route::get('/home', function () {
    return view('home');
});
Route::get('/home/login','admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/home/login','admin\Auth\LoginController@login');
Route::post('/logout', 'admin\Auth\LoginController@logout')->name('admin.logout');
Route::resource('/home/category','categorycontroller');
Route::resource('/home/brand','brandcontroller');
Route::resource('/home/product','productcontroller');
Route::resource('/home/order','ordercontroller');
Route::resource('/home/user','userscontroller');
Route::get('/home/profile',function () {
    return view('user.adminprofile');
});

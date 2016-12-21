<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
   Route::get("register",function()
{
	return view ("register");
});
Route::post("register_check",'UserController@register_check');
Route::get("index",function()
{
	return view("index");
});
Route::get("login",function()
{
	return view("login");
});
Route::post("login_check",'UserController@login_check');
Route::get("logout","UserController@logout");
Route::get("baoming1","UserController@baoming1");
Route::get("baoming2","UserController@baoming2");
Route::get("baoming3","UserController@baoming3");
Route::get("baoming4","UserController@baoming4");
Route::get("SelfCenter","UserController@SelfCenter");
Route::post("grades1","UserController@grades1");
Route::post("grades2","UserController@grades2");
Route::post("grades3","UserController@grades3");
Route::post("grades4","UserController@grades4");
Route::get("fengyunbang","UserController@fengyunbang");
});




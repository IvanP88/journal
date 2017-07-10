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

Route::get('/', function () {
    return view('home');
});

//Auth::routes();
Route::auth();
//User
Route::get('/profile', 'UserController@profile');
Route::get('/roles', 'UserController@roles');
Route::get('/roles_change/{id}', 'UserController@roles_change');


//Teacher
Route::get('/distance_one', 'LeanerController@distance_one');


Route::get('/home', 'HomeController@index');
Route::get('/index', 'MainController@index');

//form
Route::post('/profile_save', 'UserController@profile_save');
Route::post('/role_save', 'UserController@role_save');

// Lang
Route::get('lang/{locale}', function ($locale) {
    App::setLocale($locale);
    Session::put('locale', $locale);
//    dd(Session::all());
    return redirect()->back();
});

// Ajax
Route::post('/get_user_coordinate', [
    'uses' =>'UserController@get_user_coordinate',
    'as'=>'get_user_coordinate'
    ]);
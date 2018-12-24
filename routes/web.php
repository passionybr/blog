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
Route::any('/','UserController@index');
Route::any('/index','UserController@index');
Route::any('/register','UserController@register');
Route::any('/login','UserController@login');
Route::any('/dologin','UserController@dologin');
Route::any('/createaccount','UserController@createaccount');
Route::any('/logout','UserController@logout');

 
Route::any('/dashboard','UserController@dashboard')->middleware('auth');
Route::any('/profile','UserController@profile');
Route::any('/updateprofile','UserController@updateprofile');
Route::any('/testsp','UserController@testsp');
 
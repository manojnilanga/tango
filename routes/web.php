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

Route::get('', "PagesController@home" );
Route::get('signup', "PagesController@signup")->name("signup");
Route::post('signup', "PagesController@register");

Route::get('signin', "PagesController@signin")->name("signin");
Route::post('signin', "PagesController@signinpost");

Route::get('registerbusiness', "PagesController@registerbusiness")->name("registerbusiness");
Route::post('registerbusiness', "PagesController@registerbusiness");



Route::resource("users","UsersController");
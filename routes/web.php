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
    return view('welcome');
});

Route::get('/listOfuser', 'ApiManager\ApiController@list_of_user');

Route::get('auth/register', 'Auth\User\RegisterController@index');

Route::post('/doRegister', 'Auth\User\RegisterController@register');

Route::get('/login', 'Auth\Dev\DevController@login');
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');

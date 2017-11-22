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

Route::group(['prefix'  =>  'dev/v1'], function(){
  Route::get('/', 'Dev\DevController@index');
  Route::get('/user-list', 'Dev\DevController@userList');
  Route::get('/login', 'Dev\DevController@login');
  Route::get('/activity-logs', 'Dev\DevController@activityLogs');

  Route::get('/API-list', 'Dev\DevController@apiList');
});


Route::get('/listOfuser', 'ApiManager\ApiController@list_of_user');

Route::get('auth/register', 'Auth\User\RegisterController@index');

Route::post('/doRegister', 'Auth\User\RegisterController@register');


// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{user}','UserController@index')->name('user.show');

Route::get('/threads','ThreadsController@index');

Route::get('/threads/{thread}','ThreadsController@show')->name('show.thread');

Route::post('/threads/{thread}/replies','RepliesController@store')->name('reply.store');
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

Route::get('access_denied', function () {
    return view('layouts.admin.access_denied');
});

Route::resource('blogs', 'Blogs\BlogsController');

Route::group([
		'middleware' => 'auth'
	], function () {

    Route::get('/home', 'Users\UsersController@index')->name('home');

    Route::resource('users', 'Users\UsersController');
});
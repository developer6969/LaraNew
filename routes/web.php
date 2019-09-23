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

// PUBLIC ROUTES

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PageController@menu');
Route::get('/about', 'PageController@about');
Route::get('/doctors', 'PageController@doctors');
Route::get('/services', 'PageController@services');
Route::get('/blog', 'PageController@blog');
Route::get('/reviews', 'PageController@reviews');
Route::get('/gallery', 'PageController@gallery');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/authenticated', function () {
    return 's5d4';
});

// For USER (auth check by controller)
Route::get('/my-appointments', 'PageController@appointments');
Route::get('/my-members', 'PageController@members');
Route::get('/my-chats', 'PageController@chat');
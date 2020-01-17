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

Route::get('/foo', function() {
    return view('hello');
});

Route::resource('photos', 'PhotoController');

Route::get('/name', function () {
    $name = request('name');
    return view('name', ['name' => $name]);
});

Route::get('/posts/{post}', 'PostsController@show');

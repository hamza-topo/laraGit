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
Route::get('/blogs',function(){
    return view('.blogs.blogs');
});
Route::get('/blogs/laravel',function(){
    return view('blogs.laravel');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

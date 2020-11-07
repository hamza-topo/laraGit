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
    return view('blogs.blogs');
});
Route::get('/tutorials',function(){
    return view('tutorials.tutorials');
});
Route::get('/tutorials/socialite',function(){
    return view('tutorials.socialite');
});
Route::get('/blogs/laravel',function(){
    return view('blogs.laravel');
});

Route::get('/get-blog-content','Web\MainController@getBlogContent');
Route::get('/get-tutorial-content','Web\MainController@getTutorialContent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

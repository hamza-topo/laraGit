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
Route::get('/blogs/laravel', function () {
    return view('blogs.laravel');
});
Route::get('/about', function () {
    return view('auth.about');
});
Route::get('/get-blog-content', 'Web\MainController@getBlogContent');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";
});

//Talk about Events 
//Multiple Auth In Laravel 
//Talk about using multiple subdomaines 
//Talk about laravel JWT and Laravel Passeport 
//Talk about wordpress & laravel 
//talk about laravel translate 
//Don't forget the Api for ecommerce product 
//Laravel cron send email to remind The Responsable of Backup that he should do a Backup for his application
//we Occured some problems when we tried to migrate ower application to a linux serve : trick we did 2 file .htaccess
//a shit called Avada have to learn :
//how many times did I applied to new Jobs 
//What about Sport Salle 
//what are the packages that you can deal with : 
//--->JWT ,
//--->Laravel socialite,
//--->laravel-Pdf-Dom,
//--->Laravel Passeport,
//--->EXCEL,
//--->Laravel Cors or create my Own middleware
//let's integrate a gateway webservice for sending SMS 
//Exceptions 
//SOAP :Difficult a little bit hahaha
//HTTP STATUS AND WHAT EVERY CODE MEANS
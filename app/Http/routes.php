<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('contact', 'WelcomeController@contact');

//Route::get('/contact', function() {
//    return view('pages.contact');
//});

Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

Route::get('articles','ArticlesController@index');
Route::get('articles/{id}','ArticlesController@show');
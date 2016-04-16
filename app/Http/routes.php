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

Route::get('/', function () {
   return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

Route::resource('articles', 'ArticlesController');

Route::get('tags/{tags}', 'TagsController@show');

Route::controllers([
   'auth' => 'Auth\AuthController',
   'password' => 'Auth\PasswordController'
]);

Route::get('foo', 'FooController@foo');
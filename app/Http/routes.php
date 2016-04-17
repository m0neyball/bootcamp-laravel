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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
interface BarInterface {}
class Bar implements BarInterface {}
class SecondBar implements BarInterface {}
App()->bind('BarInterface', 'SecondBar');
Route::get('bar', function () {
    $bar = App('BarInterface');
    dd($bar);
});
*/

Route::get('ben', 'BenController@ben');

Route::get('/', 'WelcomeController@index');

Route::get('contact', 'WelcomeController@contact');

Route::get('about', [
    'middleware' => 'auth',
    'uses'       => 'PagesController@about',
]);

/*
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
*/

Route::resource('articles', 'ArticlesController');

Route::group(['namespace' => 'Auth'], function () {
    Route::Controller('auth', 'AuthController');

    // Route::Controller('password', 'PasswordController');
    // 密碼重置連結的路由...
    Route::get('password/email', 'PasswordController@getEmail');
    Route::post('password/email', 'PasswordController@postEmail');

    // 密碼重置的路由...
    Route::get('password/reset/{token}', 'PasswordController@getReset');
    Route::post('password/reset', 'PasswordController@postReset');
});

Route::get('foo', ['middleware' => 'manager', function () {
    return 'this page may be viewed by managers';
}]);
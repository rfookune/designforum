<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', 'FrontendController@home');

Route::get('/portfolio', 'FrontendController@portfolio');
Route::get('/team', 'FrontendController@team');
Route::get('/portfolio/{slug}', 'FrontendController@project');

Route::get('/faq', 'FrontendController@faq');
Route::get('/contact', 'FrontendController@contact');

Route::post('/send-message', 'MessageController@store');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::resource('/message', 'MessageController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

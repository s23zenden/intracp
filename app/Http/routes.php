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

Route::get('/', 'Pages\HomeController@index');

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::get('about', 'Pages\AboutController@index');

Route::get('portfolios', 'Pages\PortfoliosController@index');

Route::get('contact', 'Pages\ContactController@index');
Route::post('contact', 'Pages\ContactController@getContactUsForm');

Route::get('services', 'Pages\HomeController@services');

Route::get('products', 'Pages\HomeController@products');

Route::get('solutions', 'Pages\HomeController@solutions');

Route::get('markets', 'Pages\HomeController@markets');

Route::get('followus', 'Pages\HomeController@followus');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

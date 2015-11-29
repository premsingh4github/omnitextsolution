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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('about','HomeController@about');
Route::get('service','HomeController@service');
Route::get('whyus','HomeController@whyus');
Route::get('howitwork','HomeController@howitwork');
Route::get('faq','HomeController@faq');
Route::get('contact','HomeController@contact');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

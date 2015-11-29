<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
	Route::get('/', 'AdminController@index');
	// for login
	Route::get('/login','AdminController@login');
	Route::post('login','AdminController@postLogin');
	Route::get('/register','AdminController@register');
	Route::get('/password/email','AdminController@password');
	Route::group(['middleware'=> 'admin'],function(){
		Route::get('home','AdminController@home');
	});
});
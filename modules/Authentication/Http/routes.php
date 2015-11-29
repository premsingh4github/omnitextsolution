<?php

Route::group(['prefix' => 'authentication', 'namespace' => 'Modules\Authentication\Http\Controllers'], function()
{
	Route::get('/', 'AuthenticationController@index');
	Route::get('/register','AuthenticationController@register');
	Route::post('/register','AuthenticationController@create');
	Route::get('activate/{code}', 'AuthenticationController@activateAccount');
	Route::post('/login','AuthenticationController@login');
	Route::get('/login','AuthenticationController@getLogin');
});
Route::group(['namespace' => 'Modules\Authentication\Http\Controllers'],function(){

});
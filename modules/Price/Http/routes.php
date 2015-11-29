<?php

Route::group(['prefix' => 'price','middleware'=>'admin', 'namespace' => 'Modules\Price\Http\Controllers'], function()
{
	Route::get('/', 'PriceController@index');
	Route::get('assignment','PriceController@assignment');
	Route::get('assignment/add','PriceController@addAssignmentType');
	Route::post('assignment/add','PriceController@createAssignmentType');
});
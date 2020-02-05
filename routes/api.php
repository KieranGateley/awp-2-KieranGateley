<?php

use Illuminate\Http\Request;
Route::group(['middleware' => 'auth:api'], function () {

    Route::get('plugins', 'ApiPluginController@index');

    Route::get('plugins/{id}', 'ApiPluginController@show');

    Route::get('plugins/create', 'ApiPluginController@store');

    Route::get('plugins/update/{id}', 'ApiPluginController@update');

    Route::get('plugins/delete/{id}', 'ApiPluginController@delete');

});


<?php

Route::group(['middleware' => 'auth'], function () {
    Route::get('/plugins/create', 'PluginController@create')->name('create_plugin');

    Route::post('/plugins/create', 'PluginController@store')->name('create_plugin');

    Route::get('/plugins/update/{plugin}', 'PluginController@edit')->name('edit_plugin');

    Route::post('/plugins/update/{plugin}', 'PluginController@update')->name('edit_plugin');
});

Route::get('/', function () {
    return view('content.homepage');
})->name('home');

Route::get('/plugins', 'PluginController@index')->name('all_plugins');

Auth::routes();



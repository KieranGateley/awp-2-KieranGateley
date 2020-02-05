<?php


Route::get('/', function () {
    return view('content.homepage');
})->name('home');

Route::get('/plugins', 'PluginController@index')->name('all_plugins');

Route::get('/plugins/create', 'PluginController@create')->name('create_plugin');

Route::post('/plugins/create', 'PluginController@store')->name('create_plugin');

Auth::routes();


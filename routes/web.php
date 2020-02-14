<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/plugins/create', 'PluginController@create')->name('create_plugin');

    Route::post('/plugins/create', 'PluginController@store')->name('create_plugin');

    Route::get('/plugins/update/{plugin}', 'PluginController@edit')->name('edit_plugin');

    Route::post('/plugins/update/{plugin}', 'PluginController@update')->name('edit_plugin');

    Route::post('/plugins/delete/{plugin}', 'PluginController@destroy')->name('delete_plugin');

    Route::get('/plugins/{plugin}/versions/create', 'PluginVersionController@create')->name('create_version');

    Route::post('/plugins/{plugin}/versions/create', 'PluginVersionController@store')->name('create_version');

    Route::get('/plugins/{plugin}/versions/update/{version}', 'PluginVersionController@edit')->name('edit_version');

    Route::post('/plugins/{plugin}/versions/update/{version}', 'PluginVersionController@update')->name('edit_version');

});

Route::get('/', function () {
    return view('content.homepage');
})->name('home');

Route::get('/plugins', 'PluginController@index')->name('all_plugins');

Route::get('/plugins/{plugin}', 'PluginController@show')->name('view_plugin');

Route::get('/versions', 'PluginVersionController@index')->name('all_versions');

Route::get('/plugins/{plugin}/versions/{version}', 'PluginVersionController@show')->name('view_version');

Auth::routes();



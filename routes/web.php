<?php


Route::get('/', function () {
    return view('content.homepage');
})->name('home');

Route::get('/plugins', 'PluginController@index')->name('all_plugins');

Auth::routes();


<?php


Route::get('/', function () {
    return view('content.homepage');
})->name('home');

Route::get('/plugins', function () {
    return view('content.plugin.table', ['plugins' => App\Plugin::all()]);
})->name('all_plugins');

Auth::routes();


<?php


Route::get('/', function () {
    return view('content.homepage');
})->name('home');

Auth::routes();


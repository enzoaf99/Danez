<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('faqs', function () {
    return view('faqs');
});

Route::get('aboutUs', function () {
    return view('aboutUs');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
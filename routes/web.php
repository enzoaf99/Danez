<?php

Route::get('/', function () {
    return view('home');
});

Route::get('faqs', function () {
    return view('faqs');
});

Route::get('aboutUs', function () {
    return view('aboutUs');
});

Auth::routes();

Route::resource('products','ProductController')->middleware('auth');;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
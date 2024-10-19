<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('sign-up', function () {
    return view('sign-up');
});


Route::get('login', function () {
    return view('login');
});


Route::get('profile', function () {
    return view('profile');
});

Route::get('edit', function () {
    return view('edit');
});

Route::get('menu', function () {
    return view('menu');
});



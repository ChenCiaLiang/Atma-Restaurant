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

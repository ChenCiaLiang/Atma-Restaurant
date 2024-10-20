<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/user/homepage');
});

Route::get('sign-up', function () {
    return view('/user/sign-up');
});


Route::get('login', function () {
    return view('/user/login');
});


Route::get('profile', function () {
    return view('/user/main/profile');
});

Route::get('edit', function () {
    return view('/user/main/edit');
});

Route::get('menu', function () {
    return view('/user/main/menu');
});

Route::get('reservasi', function () {
    return view('/user/main/reservasi');
});

Route::get('pembayaran', function () {
    return view('/user/main/pembayaran');
});


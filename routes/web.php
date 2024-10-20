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

Route::get('admin_dashboard', function () {
    return view('Admin.admin_dashboard');
});

Route::get('admin_dashboard_content', function () {
    return view('Admin.admin_dashboard_content');
});

Route::get('admin_user', function () {
    return view('Admin.admin_user');
});

Route::get('admin_menu', function () {
    return view('Admin.admin_menu');
});

Route::get('admin_profile', function () {
    return view('Admin.admin_profile');
});
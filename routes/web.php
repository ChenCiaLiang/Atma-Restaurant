<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;



Route::post('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/loginUser', [UserController::class, 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/logoutAdmin', [AdminController::class, 'logout'])->name('admin.logout');


Route::get('/', function () {
    return view('/user/homepage');
});

Route::get('sign-up', function () {
    if(Auth::guard('user')->check()){
        return redirect('/');
    }else if(Auth::guard('admin')->check()){
        return redirect('admin_dashboard');
    }
    return view('/user/sign-up');
});

Route::get('login', function () {
    if(Auth::guard('user')->check()){
        return redirect('/');
    }else if(Auth::guard('admin')->check()){
        return redirect('admin_dashboard');
    }
    return view('/user/login');
})->name('login');


Route::middleware(['auth:user'])->group(function () {

    Route::get('profile', [UserController::class, 'index']);

    Route::post('/user/update-profile', [UserController::class, 'updateProfile'])->name('user.updateProfile');



    Route::get('edit', function () {
        return view('/user/main/edit');
    });

    Route::get('menu', [MenuController::class, 'indexUser']);


    Route::get('reservasi', function () {
        return view('/user/main/reservasi');
    });

    Route::get('pembayaran', function () {
        return view('/user/main/pembayaran');
    });

    Route::get('qris', function () {
        return view('/user/main/qris');
    });

    Route::get('virtual', function () {
        return view('/user/main/virtual');
    });

    Route::get('pembayaranBerhasil', function () {
        return view('Notif.pembayaranBerhasil');
    });

    Route::get('pemesananBerhasil', function () {
        return view('Notif.pemesananBerhasil');
    });
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin_dashboard', function () {
        return view('Admin.admin_dashboard');
    });

    Route::get('admin_dashboard_content', function () {
        return view('Admin.admin_dashboard_content');
    });

    Route::get('admin_user', function () {
        return view('Admin.admin_user');
    });

    Route::get('admin_menu', [MenuController::class, 'indexAdmin']);
    Route::post('menu_store', [MenuController::class, 'store'])->name('menu.store');

    Route::get('menu_edit/{id_menu}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('menu_update/{id_menu}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('menu_delete/{id_menu}', [MenuController::class, 'destroy'])->name('menu.delete');

    Route::get('admin_profile', function () {
        return view('Admin.admin_profile');
    });
});

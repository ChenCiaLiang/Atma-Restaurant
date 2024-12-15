<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;



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

    Route::post('reservasi', [ReservasiController::class, 'store'])->name('reservasi.create');

    Route::get('menu', [MenuController::class, 'indexUser']);

    Route::get('pembayaran/user', [PembayaranController::class, 'indexUser']);
    Route::get('pembayaran/admin', [PembayaranController::class, 'indexAdmin']);

    Route::get('pesanan/all', [PesananController::class, 'indexAll']);
    Route::get('pesanan/store', [PesananController::class, 'store']);
    //---------------------------------------------------------------------------------------------------------------------------------

    Route::get('edit', function () {
        return view('/user/main/edit');
    });

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

    Route::get('pemesanan', function () {
        return view('Notif.pemesanan');
    });
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin_dashboard', function () {
        return view('Admin.admin_dashboard');
    });

    Route::get('admin_dashboard_content', function () {
        return view('Admin.admin_dashboard_content');
    });

    // Route::get('admin_user', function () {
    //     return view('Admin.admin_user');
    // });

    // Route::get('Admin/admin_menu', function () {
    //     return view('Admin.admin_menu');
    // })->name('admin_menu');

    Route::get('admin_menu', [MenuController::class, 'indexAdmin'])->name('admin_menu');
    Route::post('menu_store', [MenuController::class, 'store'])->name('menu.store');
    
    Route::delete('admin_user/{id_user}', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('admin_user', [UserController::class, 'indexAll'])->name('admin_user');
    // Route::get('admin_user', [UserController::class, 'showChart'])->name('admin_user');


    Route::get('menu_edit/{id_menu}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('menu_update/{id_menu}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('menu_delete/{id_menu}', [MenuController::class, 'destroy'])->name('menu.delete');

    Route::get('admin_profile', function () {
        return view('Admin.admin_profile');
    });
});

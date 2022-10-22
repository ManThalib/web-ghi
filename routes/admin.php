<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;




Route::group(['prefix' => 'admin'], function () {

    route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login.post');
    route::post('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.logout');

    Route::get('/admin', function () {
        return view('admin.dashboard.index');
    });
});

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/admin', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');
});

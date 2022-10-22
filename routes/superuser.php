<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superuser\LoginController;
use app\Http\Controllers\Superuser\PaymentController;



Route::group(['prefix' => 'superuser'], function () {

    route::get('/login', [App\Http\Controllers\Superuser\LoginController::class, 'showLoginForm'])->name('superuser.login');
    Route::post('/login', [App\Http\Controllers\Superuser\LoginController::class, 'login'])->name('superuser.login.post');
    route::post('/logout', [App\Http\Controllers\Superuser\LoginController::class, 'logout'])->name('superuser.logout');

    Route::get('/superuser', function () {
        return view('superuser.dashboard.index');
    });

    Route::get('/payment', [App\Http\Controllers\Superuser\PaymentController::class, 'show'])->name('superuser.payment');
    Route::get('/submit', [App\Http\Controllers\Superuser\SubmitController::class, 'show'])->name('superuser.submit');
    Route::get('/submit/{$id}', [App\Http\Controllers\Superuser\SubmitController::class, 'download'])->name('superuser.submit.download');
    Route::get('/certificate', [App\Http\Controllers\Superuser\CertificateController::class, 'show'])->name('superuser.certificate');
});

Route::group(['middleware' => ['auth:superuser']], function () {
    Route::get('/superuser', function () {
        return view('superuser.dashboard.index');
    })->name('superuser.dashboard');
});

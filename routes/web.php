<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SosmedController;

Route::redirect('/', 'login');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'actionLogin'])->name('action-login');
Route::get('sosmed', [SosmedController::class, 'index'])->name('sosmed');

Route::get('sosmed', function () {
    return view('sosmed');
})->name('sosmed');


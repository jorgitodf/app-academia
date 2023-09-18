<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\TypeUserController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tipo-usuario', [TypeUserController::class, 'index'])->name('type-user');

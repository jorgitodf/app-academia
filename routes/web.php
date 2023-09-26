<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tipo-usuario', [TypeUserController::class, 'index'])->name('type-user');
Route::get('/usuario', [UserController::class, 'index'])->name('user');

Route::get('/tipo-usuario/create', [TypeUserController::class, 'create'])->name('type-user.create');
Route::get('/tipo-usuario/edit/{id}', [TypeUserController::class, 'edit'])->name('type-user.edit');
Route::put('/tipo-usuario/update/{id}', [TypeUserController::class, 'update'])->name('type-user.update');
Route::post('/tipo-usuario/store', [TypeUserController::class, 'store'])->name('type-user.store');

Route::get('/user/create', [UserController::class, 'create_aluno'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

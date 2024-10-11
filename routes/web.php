<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Menu\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'index'])->name('auth.login');
Route::get('register', [RegisterController::class, 'index'])->name('auth.register');

Route::get('menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
Route::get('menu/{id}', [MenuController::class, 'show'])->name('menu.show');
Route::get('menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');

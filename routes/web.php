<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\MyOrder\MyOrderController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Report\ReportController;
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

Route::get('my-orders', [MyOrderController::class, 'index'])->name('myOrder.index');
Route::get('my-orders/create', [MyOrderController::class, 'create'])->name('myOrder.create');
Route::get('my-orders/{id}', [MyOrderController::class, 'show'])->name('myOrder.show');

Route::get('orders', [OrderController::class, 'index'])->name('order.index');
Route::get('orders/{id}', [OrderController::class, 'show'])->name('order.show');

Route::get('reports', [ReportController::class, 'index'])->name('report.index');

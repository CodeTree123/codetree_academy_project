<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [UserController::class, 'index'])->name('user.list');
Route::get('/create', [UserController::class, 'create']);
Route::post('/store', [UserController::class, 'store'])->name('user.store');
Route::get('/edit', [UserController::class, 'edit'])->name('user.edit');

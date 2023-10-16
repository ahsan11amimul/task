<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::resource('tasks',TaskController::class);
Route::get('/',[TaskController::class,'index'])->name('index');
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');
 
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


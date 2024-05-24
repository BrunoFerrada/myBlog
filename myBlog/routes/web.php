<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', HomeController::class);

Route::get('auth/login', LoginController::class);

Route::get('auth/logout', LogoutController::class);

Route::get('category', [CategoryController::class, 'index']);

Route::get('category/show/{id}', [CategoryController::class, 'show']);

Route::get('category/create', [CategoryController::class, 'create']);

Route::get('category/edit/{id}', [CategoryController::class, 'edit']);
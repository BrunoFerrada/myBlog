<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('category/','getIndex')->name('category.index');
    Route::get('category/show/{id}', 'getShow')->name('category.show');
    Route::get('category/create', 'getCreate')->name('category.create');
    Route::get('category/edit/{id}',  'getEdit')->name('category.edit');   
});

require __DIR__.'/auth.php';

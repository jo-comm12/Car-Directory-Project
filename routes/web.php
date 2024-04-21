<?php

use App\Model\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('categories/create', [App\Http\Controllers\CategoryController::class, 'create']);
    Route::post('categories/create', [App\Http\Controllers\CategoryController::class, 'store']);
    Route::get('categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit']);
    Route::put('categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'update']);
    Route::get('categories/{id}/delete', [App\Http\Controllers\CategoryController::class, 'destroy']);

    Route::resource("/users", UserController::class);


    Route::get('cars', function(){
        return Cars::get();
    });

    Route::get('cars-create', function(){
        return Cars::create();
    });

    Route::get('products/create', [App\Http\Controllers\CarsController::class, 'create']);
    Route::post('products/create', [App\Http\Controllers\CarsController::class, 'store']);

    Route::get('/', function() {
        return view('frontend.index');
    });
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;

Route::get('/', [AuthController::class, 'index'])->name('login');

Route::get('login', [AuthController::class, 'index'])->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('registration', [AuthController::class, 'registration'])->name('register');

Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 

Route::get('dashboard', [AuthController::class, 'dashboard']); 

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('home', [FrontController::class, 'home'])->name('home');


Route::get('about-us', [FrontController::class, 'aboutUs'])->name('about.us');

// Route::get('stock', [StockController::class, 'stock'])->name('stock');

Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::post('products', [ProductController::class, 'store'])->name('products.store');

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('products/{id}', [ProductController::class, 'edit'])->name('products.edit');

Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::middleware(['auth'])->group(function () {
    Route::get('/stocks', [StockController::class, 'index'])->name('stocks.index');
    Route::post('/stocks', [StockController::class, 'store'])->name('stocks.store');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
});









// Route::get('stocks', [StockController::class, 'index'])->name('stocks.index');

// Route::post('stocks', [StockController::class, 'store'])->name('stocks.store');

// Route::get('stocks/create', [StockController::class, 'create'])->name('stocks.create');

// Route::get('stocks/{id}', [StockController::class, 'edit'])->name('stocks.edit');

// Route::put('stocks/{id}', [StockController::class, 'update'])->name('stocks.update');
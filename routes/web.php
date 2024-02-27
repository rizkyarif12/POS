<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsertController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::prefix('/category')->group(function () {
    Route::get('/food-beverage', [ProductController::class,'food']);
    Route::get('/beauty-health', [ProductController::class,'beauty']);
    Route::get('/home-care', [ProductController::class,'home']);
    Route::get('/baby-kid', [ProductController::class,'baby']);
});
Route::get('/user/{id}/name/{name}', [UsertController::class,'index']);
Route::get('/transaksi', [PenjualanController::class, 'index']);
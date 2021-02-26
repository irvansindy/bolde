<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\variantController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\viewProductController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [viewProductController::class, 'index']);


Route::resource('product', productController::class);
Route::resource('variant', variantController::class);
Route::resource('category', categoryController::class);
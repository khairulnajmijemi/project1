<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index']);
Route::get('/', [ProductController::class, 'index'])->name('welcome');
Route::get('/viewproduct/{id}', [ProductController::class, 'show'])->name('viewproduct');
Route::get('/create-product', [ProductController::class, 'create'])->name('createproduct');
Route::post('/store-product', [ProductController::class, 'store'])->name('storeproduct');
Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('editpage');
Route::put('/update-product/{id}', [ProductController::class, 'update'])->name('updateproduct');
Route::delete('/delete-product/{id}', [ProductController::class, 'destroy'])->name('deleteproduct');

//Route::get('/update-product/{id}', [ProductController::class, 'delete'])->name('deleteproduct');
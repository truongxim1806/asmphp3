<?php

use App\Http\Controllers\ProductController;
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


// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [ProductController::class, 'home']);
Route::get('/detail', [ProductController::class, 'show'])->name('detail.show');
Route::get('/products', [ProductController::class, 'list'])->name('products.list');
Route::get('/login', [ProductController::class, 'login'])->name('login.login');
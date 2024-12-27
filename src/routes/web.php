<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
//一覧画面の表示
Route::get('/', [ProductController::class, 'index']);
//商品の検索
Route::get('/search', [ProductController::class, 'show'])->name('search.show');
//商品の詳細
Route::get('/{productId}', [ProductController::class, 'link'])->name('productId.show');
//商品の登録画面の表示
Route::get('/register', [ProductController::class, 'create'])->name('register.create');
//商品の登録処理
Route::post('/{productId}/update', [ProductController::class, 'store'])->name('update.store');




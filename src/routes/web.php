<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ShopDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ShopController::class, 'index']);
Route::get('/all/search', [ShopController::class, 'search']);
Route::get('/all/{id}', [ShopController::class, 'showDetail']);

Route::get('/detail/:shop_id', [ShopDetailCotroller::class, 'index']);

Route::middleware('auth')->group(function () {
   Route::get('/mypage', [MypageController::class, 'index']);
});
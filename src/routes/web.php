<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MypageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ShopController::class, 'index']);
Route::get('/all/search', [ShopController::class, 'search']);
Route::get('/detail/:{shop_id}', [ShopController::class, 'showDetail']);


Route::middleware('auth')->group(function () {
   Route::get('/mypage', [MypageController::class, 'index']);
   Route::post('/mypage/reserve/delete', [MypageController::class, 'delete']);

   Route::post('/detail/:shop_id/reserve', [ShopController::class, 'create']);

   Route::post('/all/score', [ShopController::class, 'add']);
   Route::post('/all/score/delete', [ShopController::class, 'delete']);
});
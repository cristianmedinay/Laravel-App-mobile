<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */


Route::resource('categories',CategoryController::class)
                ->only(['index','show','store','update','destroy']);

Route::resource('products',CategoryController::class)
                ->only(['index','show','store','update','destroy']);
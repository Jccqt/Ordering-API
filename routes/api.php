<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::patch('products/{product}/restore', [ProductController::class, 'restore'])->withTrashed();
Route::apiResource('products', ProductController::class);

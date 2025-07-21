<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('/post', PostController::class);
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');

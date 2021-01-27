<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);

// API INTERNO O API LOCAL
Route::group(['prefix' => 'api'], function () {
    Route::apiResource('posts', PostController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Aplication\HomeController::class, 'index'])->name('home');

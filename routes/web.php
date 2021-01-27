<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

// API INTERNO O API LOCAL
Route::group(['prefix' => 'api'], function () {
    Route::apiResource('posts', PostController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

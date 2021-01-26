<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// API INTERNO O API LOCAL
Route::group(['prefix' => 'api'], function () {
    Route::apiResource('posts', PostController::class);
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// API PARA OTROS SISTEMAS
// AUTENTIFICACIÓN POR TOKENS

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Manera de definir rutas del tipo resource solo permitiendo algunos métodos
// Route::resource('posts', PostController::class)->only(['create', 'edit']);

// Manera de definir rutas del tipo resource exceptuando a algunos métodos
// Route::resource('posts', PostController::class)->except(['create', 'edit']);

// Manera de definir una ruta del tipo apiResource
// Route::apiResource('post', PostController::class);
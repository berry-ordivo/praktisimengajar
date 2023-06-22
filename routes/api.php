<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('posts')->group(function () {
    Route::get('/', [App\Http\Controllers\Api\PostController::class, 'index']);
    Route::post('/', [App\Http\Controllers\Api\PostController::class, 'store']);
    Route::get('/{id}', [App\Http\Controllers\Api\PostController::class, 'show']);
    Route::patch('/{id}', [App\Http\Controllers\Api\PostController::class, 'update']);
    Route::delete('/{id}', [App\Http\Controllers\Api\PostController::class, 'destroy']);
});

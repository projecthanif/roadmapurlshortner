<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\LinkController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('/v1')->group(function () {
    Route::apiResource('/link', LinkController::class);
    Route::get('/shorten/{shortCode}', [LinkController::class, 'short']);
    Route::put('/shorten/{shortCode}', [LinkController::class, 'update']);
    Route::get('/shorten/{shortCode}/stats', [LinkController::class, 'stats']);
});

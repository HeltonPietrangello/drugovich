<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('grupos', \App\Http\Controllers\Api\GrupoController::class);
Route::apiResource('grupos.clientes', \App\Http\Controllers\Api\ClienteController::class)->only(['index']);

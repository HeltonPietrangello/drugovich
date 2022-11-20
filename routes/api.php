<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\Api\LoginController;
use App\Http\Controllers\Api\GrupoController;
use App\Http\Controllers\Api\ClienteController;


// Rotas Gerentes nível 1 - Podem apenas visualizar grupos, adicionar/remover clientes
Route::apiResource('grupos', GrupoController::class)->only(['index', 'show'])->middleware(['auth:sanctum', 'ability:nivel_1,nivel_2']);


// Rotas gerente nível 2 - Podem criar, editar e excluir grupos
Route::apiResource('grupos', GrupoController::class)->only(['store', 'update', 'destroy'])->middleware(['auth:sanctum', 'ability:nivel_2']);


// Rota para visualizar Clientes de um Grupo
Route::apiResource('grupos.clientes', ClienteController::class)->middleware(['auth:sanctum', 'ability:nivel_1,nivel_2']);


//Rotas de autenticação de usuário
Route::post('login', [LoginController::class, 'login']);

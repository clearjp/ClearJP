<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| defino las rutas de API
|--------------------------------------------------------------------------
| expongo estas rutas bajo el prefijo /api.
| Ejemplo: POST /api/register y POST /api/login
*/

// registro usuarios con "usuario" (email) y "password".
Route::post('/register', [AuthController::class, 'register']);

// inicio sesión con "usuario" (email) y "password".
Route::post('/login', [AuthController::class, 'login']);

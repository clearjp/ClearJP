<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Estas rutas se exponen bajo el prefijo /api.
| Ejemplo: POST /api/register y POST /api/login
*/

// Registro de usuario con "usuario" (email) y "password".
Route::post('/register', [AuthController::class, 'register']);

// Inicio de sesion con "usuario" (email) y "password".
Route::post('/login', [AuthController::class, 'login']);

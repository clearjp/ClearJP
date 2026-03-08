<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ReservaRapidaController;

/*
|--------------------------------------------------------------------------
| Defino las rutas de API.
|--------------------------------------------------------------------------
| Estas rutas quedan publicadas bajo el prefijo /api.
| Ejemplo: POST /api/register, POST /api/login y POST /api/reservas-rapidas
*/

// Registro de usuarios con "usuario" (email) y "password".
Route::post('/register', [AuthController::class, 'register']);

// Inicio de sesion con "usuario" (email) y "password".
Route::post('/login', [AuthController::class, 'login']);

// Registro de solicitudes del formulario de reserva rapida.
Route::post('/reservas-rapidas', [ReservaRapidaController::class, 'store']);
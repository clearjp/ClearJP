<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Registro de usuario.
     * Recibe: usuario (email) y password.
     * Responde: mensaje de registro exitoso o errores de validacion.
     */
    public function register(Request $request)
    {
        // Validar datos de entrada
        $data = $request->validate([
            'usuario' => ['required', 'string', 'email', 'max:190'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        // Verificar si el usuario ya existe en la tabla usuarios
        $exists = DB::table('usuarios')
            ->where('email', $data['usuario'])
            ->exists();

        if ($exists) {
            return response()->json([
                'ok' => false,
                'mensaje' => 'Usuario ya existe',
            ], 409);
        }

        // Insertar nuevo usuario con password hasheado
        $id = DB::table('usuarios')->insertGetId([
            'email' => $data['usuario'],
            'password_hash' => Hash::make($data['password']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'ok' => true,
            'mensaje' => 'Registro exitoso',
            'usuario_id' => $id,
        ], 201);
    }

    /**
     * Inicio de sesion.
     * Recibe: usuario (email) y password.
     * Responde: autenticacion satisfactoria o error en la autenticacion.
     */
    public function login(Request $request)
    {
        // Validar datos de entrada
        $data = $request->validate([
            'usuario' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Buscar usuario por email
        $user = DB::table('usuarios')
            ->where('email', $data['usuario'])
            ->first();

        // Si no existe o la clave no coincide, devolver error de autenticacion
        if (!$user || !Hash::check($data['password'], $user->password_hash)) {
            return response()->json([
                'ok' => false,
                'mensaje' => 'Error en la autenticación',
            ], 401);
        }

        // Autenticacion correcta
        return response()->json([
            'ok' => true,
            'mensaje' => 'Autenticación satisfactoria',
            'usuario_id' => $user->id,
        ], 200);
    }
}

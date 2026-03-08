<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Registro un usuario en la tabla usuarios.
     * Recibo: usuario (email) y password.
     */
    public function register(Request $request)
    {
        // Valido los datos de entrada del formulario.
        $data = $request->validate([
            'usuario' => ['required', 'string', 'email', 'max:190'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        // Verifico si el email ya existe en la tabla usuarios.
        $exists = DB::table('usuarios')
            ->where('email', $data['usuario'])
            ->exists();

        if ($exists) {
            return response()->json([
                'ok' => false,
                'mensaje' => 'Usuario ya existe',
            ], 409);
        }

        // Inserto el nuevo usuario guardando la contrasena con hash seguro.
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
     * Inicio de sesion contra la tabla usuarios.
     * Recibo: usuario (email) y password.
     */
    public function login(Request $request)
    {
        // Valido los datos de entrada del login.
        $data = $request->validate([
            'usuario' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Busco el usuario por email en la tabla usuarios.
        $user = DB::table('usuarios')
            ->where('email', $data['usuario'])
            ->first();

        // Devuelvo error si no existe o la clave no coincide.
        if (!$user || !Hash::check($data['password'], $user->password_hash)) {
            return response()->json([
                'ok' => false,
                'mensaje' => 'Error en la autenticacion',
            ], 401);
        }

        return response()->json([
            'ok' => true,
            'mensaje' => 'Autenticacion satisfactoria',
            'usuario_id' => $user->id,
        ], 200);
    }
}
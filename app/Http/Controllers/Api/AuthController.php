<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * registro un usuario.
     * recibo: usuario (email) y password.
     * respondo: mensaje de registro exitoso o errores de validaci??n.
     */
    public function register(Request $request)
    {
        // valido los datos de entrada.
        $data = $request->validate([
            'usuario' => ['required', 'string', 'email', 'max:190'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        // verifico si el usuario ya existe en la tabla usuarios.
        $exists = DB::table('usuarios')
            ->where('email', $data['usuario'])
            ->exists();

        if ($exists) {
            return response()->json([
                'ok' => false,
                'mensaje' => 'Usuario ya existe',
            ], 409);
        }

        // inserto el nuevo usuario con password hasheado.
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
     * inicio sesi??n.
     * recibo: usuario (email) y password.
     * respondo: autenticaci??n satisfactoria o error en la autenticaci??n.
     */
    public function login(Request $request)
    {
        // valido los datos de entrada.
        $data = $request->validate([
            'usuario' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // busco el usuario por email.
        $user = DB::table('usuarios')
            ->where('email', $data['usuario'])
            ->first();

        // devuelvo error si no existe o la clave no coincide.
        if (!$user || !Hash::check($data['password'], $user->password_hash)) {
            return response()->json([
                'ok' => false,
                'mensaje' => 'Error en la autenticación',
            ], 401);
        }

        // confirmo la autenticación correcta.
        return response()->json([
            'ok' => true,
            'mensaje' => 'Autenticación satisfactoria',
            'usuario_id' => $user->id,
        ], 200);
    }
}

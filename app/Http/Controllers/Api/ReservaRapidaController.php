<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaRapidaController extends Controller
{
    /**
     * Guardo una solicitud de reserva rapida enviada desde la landing.
     */
    public function store(Request $request): JsonResponse
    {
        // Valido los campos obligatorios del formulario.
        $data = $request->validate([
            'nombre' => ['required', 'string', 'max:120'],
            'telefono' => ['required', 'string', 'max:30'],
            'tipo_servicio' => ['required', 'string', 'max:50'],
            'fecha_preferida' => ['nullable', 'date'],
        ]);

        // Inserto la solicitud con estado inicial pendiente.
        $id = DB::table('reservas_rapidas')->insertGetId([
            'nombre' => $data['nombre'],
            'telefono' => $data['telefono'],
            'tipo_servicio' => $data['tipo_servicio'],
            'fecha_preferida' => $data['fecha_preferida'] ?? null,
            'estado' => 'pendiente',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'ok' => true,
            'mensaje' => 'Solicitud registrada correctamente.',
            'reserva_rapida_id' => $id,
        ], 201);
    }
}
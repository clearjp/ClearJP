<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * siembro la base de datos de la aplicaci??n.
     */
    public function run(): void
    {
        // creo un usuario de ejemplo.
        // puedo crear usuarios de prueba en lote.

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

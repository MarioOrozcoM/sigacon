<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InsertUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Juan Carlos Lopez Rodriguez',
            'nombreUsuario' => 'usuario1',
            'contrasena' => Hash::make('1234'),
            'rol' => 'superUsuario',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Puedes agregar más inserciones de usuarios aquí según sea necesario
    }
}


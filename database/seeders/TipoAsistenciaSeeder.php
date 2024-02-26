<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoAsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'Asistio Temprano', 'letra' => 'A'],
            ['nombre' => 'Asistio Tarde', 'letra' => 'T'],
            ['nombre' => 'Falto', 'letra' => 'F']
        ];
        foreach ($data as $row) {
            DB::table('tipo_asistencias')->insert([
                'nombre' => $row['nombre'],
                'letra' => $row['letra']
            ]);
        }
    }
}

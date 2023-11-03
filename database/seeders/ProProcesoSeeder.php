<?php

namespace Database\Seeders;

use App\Models\ProProceso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProProcesoSeeder extends Seeder
{
    public function run(): void
    {
        $procesos = [
            [
                'pro_nombre'  => 'INGENIERÍA',
                'pro_prefijo' => 'ING',
            ],
            [
                'pro_nombre'  => 'COMUNICACIÓN',
                'pro_prefijo' => 'COM',
            ],
            [
                'pro_nombre'  => 'ARTE',
                'pro_prefijo' => 'ART',
            ],
            [
                'pro_nombre'  => 'CIENCIA',
                'pro_prefijo' => 'CIE',
            ],
            [
                'pro_nombre'  => 'MEDICINA',
                'pro_prefijo' => 'MED',
            ]
        ];

        foreach ($procesos as $proceso) {
            ProProceso::create($proceso);
        }
    }
}

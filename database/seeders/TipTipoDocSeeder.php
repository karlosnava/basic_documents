<?php

namespace Database\Seeders;

use App\Models\TipTipoDoc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipTipoDocSeeder extends Seeder
{
    public function run(): void
    {
        $tipos_documentos = [
            [
                'tip_nombre' => 'INSTRUCTIVO',
                'tip_prefijo' => 'INS',
            ],
            [
                'tip_nombre' => 'MANUAL',
                'tip_prefijo' => 'MAN',
            ],
            [
                'tip_nombre' => 'INFORME',
                'tip_prefijo' => 'INF',
            ],
            [
                'tip_nombre' => 'CONTRATO',
                'tip_prefijo' => 'CON',
            ],
            [
                'tip_nombre' => 'POLÍTICAS',
                'tip_prefijo' => 'POL',
            ]
        ];

        foreach ($tipos_documentos as $tipo_documento) {
            TipTipoDoc::create($tipo_documento);
        }
    }
}

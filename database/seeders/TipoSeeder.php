<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{

    public function run()
    {
        Tipo::create([
            'name' => 'Dientes Oscurecidos',
            'slug' => 'Dientes Oscurecidos',
            'color' => 'lemonchiffon'
        ]);

        Tipo::create([
            'name' => 'Maloclusión',
            'slug' => 'Maloclusión',
            'color' => 'olive'
        ]);

        Tipo::create([
            'name' => 'Bruxismo',
            'slug' => 'Bruxismo',
            'color' => 'teal'
        ]);

        Tipo::create([
            'name' => 'Periodontitis',
            'slug' => 'Periodontitis',
            'color' => 'lime'
        ]);

        Tipo::create([
            'name' => 'Rechinar de Dientes',
            'slug' => 'Rechinar de Dientes',
            'color' => 'indigo'
        ]);

        Tipo::create([
            'name' => 'Aparato de dientes',
            'slug' => 'Aparato de dientes',
            'color' => 'white'
        ]);

        Tipo::create([
            'name' => 'Dientes Rotos',
            'slug' => 'Dientes Rotos',
            'color' => 'maroon'
        ]);

        Tipo::create([
        'name' => 'Caries',
        'slug' => 'Caries',
        'color' => 'red'
    ]);

    }
}

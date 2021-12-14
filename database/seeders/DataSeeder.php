<?php

namespace Database\Seeders;


use App\Models\Data;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{

    public function run()
    {
        Data::create([
            'titulo' => 'Sugerencia de más personal',
            'slug' => 'Sugerencia de más personal',
            'extract' => 'Falta de atención',
            'body' => 'Hemos tenido problemas el otro día al haber un grande número de espera...'
        ]);

        Data::create([
            'titulo' => 'Mensajería instántanea',
            'slug' => 'Mensajería instántanea',
            'extract' => 'Queremos avisos por mensajería instantanea',
            'body' => 'Es más cómodo que el correo los avisos...'
        ]);
    }
}

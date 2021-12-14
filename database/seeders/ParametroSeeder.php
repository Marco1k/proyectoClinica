<?php

namespace Database\Seeders;


use App\Models\Parametro;
use Illuminate\Database\Seeder;

class ParametroSeeder extends Seeder
{

    public function run()
    {
        Parametro::create([
            'parametro' => 'twitter',
            'slug' => 'twitter',
            'valor' => '@clinicadental'
        ]);

        Parametro::create([
            'parametro' => 'gmail',
            'slug' => 'gmail',
            'valor' => 'undentistaguiaatodos@gmail.com'
        ]);
    }
}

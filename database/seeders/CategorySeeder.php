<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        Category::create([
            'name' => 'Odontopediatra',
            'slug' => 'Odontopediatra'
        ]);

        Category::create([
            'name' => 'Periodoncista',
            'slug' => 'Periodoncista'
        ]);
    }
}

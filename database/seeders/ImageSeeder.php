<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{

    public function run()
    {
        Image::create([
            'url' => 'storage/app/citas\caries.jpg',
            'imageable_id' => '1',
            'imageable_type' => '1'
        ]);

        Image::create([
            'url' => 'storage/app/citas\caida.png',
            'imageable_id' => '2',
            'imageable_type' => '2'
        ]);

        Image::create([
            'url' => 'storage/app/citas\cuidado.jpg',
            'imageable_id' => '3',
            'imageable_type' => '3'
        ]);

        Image::create([
            'url' => 'storage/app/citas\images.png',
            'imageable_id' => '4',
            'imageable_type' => '4'
        ]);

        Image::create([
            'url' => 'storage/app/citas\caries.jpg',
            'imageable_id' => '1',
            'imageable_type' => '1'
        ]);

        Image::create([
            'url' => 'storage/app/citas\lavado.jpg',
            'imageable_id' => '5',
            'imageable_type' => '5'
        ]);

        Image::create([
            'url' => 'storage/app/citas\lupa.png',
            'imageable_id' => '6',
            'imageable_type' => '6'
        ]);

        Image::create([
            'url' => 'storage/app/citas\muelamor.png',
            'imageable_id' => '7',
            'imageable_type' => '7'
        ]);

        Image::create([
            'url' => 'storage/app/citas\muelanegra.png',
            'imageable_id' => '8',
            'imageable_type' => '8'
        ]);

        Image::create([
            'url' => 'storage/app/citas\revision.jpg',
            'imageable_id' => '9',
            'imageable_type' => '9'
        ]);

        Image::create([
            'url' => 'storage/app/citas\tratamiento.jpg',
            'imageable_id' => '10',
            'imageable_type' => '10'
        ]);

    }
}

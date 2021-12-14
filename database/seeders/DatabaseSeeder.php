<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Vamos a crear la carpeta POSTS para imágenes

        Storage::deleteDirectory('citas');
        Storage::makeDirectory('citas');

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);


        $this->call(CategorySeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(CitaSeeder::class);

        $this->call(ParametroSeeder::class);
        $this->call(DataSeeder::class);
    }
}

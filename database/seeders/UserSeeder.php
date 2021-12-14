<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Marco MedEst',
            'email'=> 'marcomarco@gmail.com',
            'password'=> bcrypt('12345678')
        ])->assignRole('Admin');;

        User::create([
            'name'=> 'Aprobar',
            'email'=> 'aprobar@gmail.com',
            'password'=> bcrypt('12345678')
        ])->assignRole('Usuario');

        User::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\cita;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Seeder;

class CitaSeeder extends Seeder
{


    public function run()
    {

        Cita::create([
            'name' => 'Urgencia: Caries',
            'slug' => 'Urgencia: Caries',

            'extract' => 'Dolor de muela debido a caries',
            'body' => 'Empezó la semana pasada el dolor',

            'fecha' => '2021-12-09',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

            Cita::create([
                'name' => 'Urgencia: muela negra',
                'slug' => 'Urgencia: muela negra',

                'extract' => 'Dolor de muela debido. Razón desconocida',
                'body' => 'Empezó a doler desde hace tiempo',

                'fecha' => '2021-12-10',
                'hora' => '18:00',

                'status' => '2',
                'category_id' => Category::all()->random()->id,
                'user_id' => User::all()->random()->id,

        ]);


        Cita::create([
            'name' => 'Dolor constante al mover la boca',
            'slug' => 'Dolor constante al mover la boca',

            'extract' => 'Duele mucho',
            'body' => 'Todo comenzó cuando hemos comido el otro día, y una vez que hemos comido y tal, en la tarde empezó a doler mucho',

            'fecha' => '2021-11-10',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);


        Cita::create([
            'name' => 'Limpieza dental',
            'slug' => 'Limpieza dental',

            'extract' => 'Revisión anual',
            'body' => 'Cita para pedir revisión de la limpieza dental, y continuación',

            'fecha' => '2021-09-10',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Diente torcido',
            'slug' => 'Diente torcido',

            'extract' => 'Dientes apilados',
            'body' => 'Siento molestias por los dientes, al estar apilados',

            'fecha' => '2021-11-30',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Blanqueamiento',
            'slug' => 'Blanqueamiento',

            'extract' => 'Solicitud de blanqueamiento',
            'body' => 'Aparte de solucionar algún problema, quiero dientes blancos y conversarlos',

            'fecha' => '2021-11-20',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Sangrado',
            'slug' => 'Sangrado',

            'extract' => 'Sangrado de encías',
            'body' => 'Inflamación y sangrado',

            'fecha' => '2021-11-24',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);


        Cita::create([
            'name' => 'Fractura',
            'slug' => 'Fractura',

            'extract' => 'Fractura dental',
            'body' => 'Fractura dental. URGENCIA',

            'fecha' => '2021-12-24',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Revisión',
            'slug' => 'Revisión',

            'extract' => 'Revisión periodica',
            'body' => 'Quiero revisar los dientes por si ocurre algo',

            'fecha' => '2021-12-26',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'URGENTE: implante',
            'slug' => 'URGENTE: implante',

            'extract' => 'Dientes caídos',
            'body' => 'Diente suelto, implante',

            'fecha' => '2021-12-26',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Revisión',
            'slug' => 'Revisión',

            'extract' => 'Revisión periodica',
            'body' => 'Quiero revisar los dientes por si ocurre algo',

            'fecha' => '2020-12-26',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Diente torcido',
            'slug' => 'Diente torcido',

            'extract' => 'Dientes apilados',
            'body' => 'Siento molestias por los dientes, al estar apilados',

            'fecha' => '2020-11-30',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Blanqueamiento',
            'slug' => 'Blanqueamiento',

            'extract' => 'Solicitud de blanqueamiento',
            'body' => 'Aparte de solucionar algún problema, quiero dientes blancos y conversarlos',

            'fecha' => '2020-11-20',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Sangrado',
            'slug' => 'Sangrado',

            'extract' => 'Sangrado de encías',
            'body' => 'Inflamación y sangrado',

            'fecha' => '2020-11-24',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);


        Cita::create([
            'name' => 'Fractura',
            'slug' => 'Fractura',

            'extract' => 'Fractura dental',
            'body' => 'Fractura dental. URGENCIA',

            'fecha' => '2020-12-24',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Revisión',
            'slug' => 'Revisión',

            'extract' => 'Revisión periodica',
            'body' => 'Quiero revisar los dientes por si ocurre algo',

            'fecha' => '2020-12-26',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'URGENTE: implante',
            'slug' => 'URGENTE: implante',

            'extract' => 'Dientes caídos',
            'body' => 'Diente suelto, implante',

            'fecha' => '2020-12-26',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Revisión',
            'slug' => 'Revisión',

            'extract' => 'Revisión periodica',
            'body' => 'Quiero revisar los dientes por si ocurre algo',

            'fecha' => '2020-12-26',
            'hora' => '18:00',

            'status' => '2',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Fractura',
            'slug' => 'Fractura',

            'extract' => 'Fractura dental',
            'body' => 'Fractura dental. URGENCIA',

            'fecha' => '2020-12-24',
            'hora' => '18:00',

            'status' => '1',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Revisión',
            'slug' => 'Revisión',

            'extract' => 'Revisión periodica',
            'body' => 'Quiero revisar los dientes por si ocurre algo',

            'fecha' => '2020-12-26',
            'hora' => '18:00',

            'status' => '1',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,


        ]);

        Cita::create([
            'name' => 'URGENTE: implante',
            'slug' => 'URGENTE: implante',

            'extract' => 'Dientes caídos',
            'body' => 'Diente suelto, implante',

            'fecha' => '2020-12-26',
            'hora' => '18:00',

            'status' => '1',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);

        Cita::create([
            'name' => 'Revisión',
            'slug' => 'Revisión',

            'extract' => 'Revisión periodica',
            'body' => 'Quiero revisar los dientes por si ocurre algo',

            'fecha' => '2020-12-26',
            'hora' => '18:00',

            'status' => '1',
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ]);


        // $citas = cita::factory(99)->create();
        $citas = cita::all();

        foreach($citas as $cita){

            Image::factory(1)->create([
                'imageable_id' => $cita->id,
                'url' => Image::all()->random()->url,
                'imageable_type' => cita::class
            ]);

            $cita->tipos()->attach([
                rand(1,4),
                rand(5,8)
            ]);
        }
    }
}

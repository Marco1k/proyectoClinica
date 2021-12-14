<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\cita;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CitaFactory extends Factory
{

    protected $model = cita::class;

    public function definition()
    {
        $name = $this->faker->unique()->sentence();

        return [

            'name' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(250),
            'body' => $this->faker->text(2000),

            'fecha' => $this->faker->unique()->date('Y-m-d H:i:s', '+30 days'),
            'hora' => $this->faker->time($format = 'H:i:s', $max = 'now'),

            'status' => $this->faker->randomElement([1,2]),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id

        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Tipo;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class TipoFactory extends Factory
{

    protected $model = Tipo::class;

    public function definition()
    {
        $name = $this->faker->unique()->word(20);

        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}

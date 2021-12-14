<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {



        return [
           // 'url' => $this->faker->image('storage/app/public/citas', 'https://cdn.pixabay.com/photo/2016/09/14/20/50/teeth-1670434_960_720.png')
           // 'url' => $this->faker->image('storage/app/public/citas', 640,480, null, true)
        ];
    }
}

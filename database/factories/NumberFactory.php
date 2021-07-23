<?php

namespace Database\Factories;

use App\Models\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

class NumberFactory extends Factory
{

    protected $model = Number::class;

    public function definition()
    {
        return [
            'num1' => rand(0,9),
            'num2' => rand(0,9),
            'num3' => rand(0,9),
            'num4' => rand(0,9),
            'num5' => rand(0,9),
            'num6' => rand(0,9),
            'num7' => rand(0,9),
            'price' => rand(10,1000),
            'operator' => $this->faker->sentence(1),
            'seller' => $this->faker->sentence(1),
            'contact' => $this->faker->e164PhoneNumber(),
            'prefix' => rand(100 , 994),
        ];
    }
}

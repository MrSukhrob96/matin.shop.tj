<?php

namespace Database\Factories;

use App\Models\Rashod;
use Illuminate\Database\Eloquent\Factories\Factory;

class RashodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rashod::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "product_id" => $this->faker->numberBetween(1, 50),
            "rashod_product_count" => $this->faker->numberBetween(5, 50),
            "rashod_product_price" => $this->faker->numberBetween(5, 2000),
            "rashod_total_product_count" => $this->faker->numberBetween(5, 2000)
        ];
    }
}

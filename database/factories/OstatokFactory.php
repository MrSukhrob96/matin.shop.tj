<?php

namespace Database\Factories;

use App\Models\Ostatok;
use Illuminate\Database\Eloquent\Factories\Factory;

class OstatokFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ostatok::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "product_id" => $this->faker->numberBetween(1, 10),
            "ostatok_product_count" => $this->faker->numberBetween(1, 5),
            "ostatok_product_price" => $this->faker->numberBetween(100, 3000),
            "ostatok_total_product_price" =>($this->faker->numberBetween(0, 10) * $this->faker->numberBetween(100, 3000)),
        ];
    }
}

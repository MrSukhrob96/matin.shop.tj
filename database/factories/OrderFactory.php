<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->numberBetween(1, 10),
            "product_id" =>$this->faker->numberBetween(1, 10),
            "order_product_count" => $this->faker->numberBetween(1, 10),
            "order_product_price" => $this->faker->numberBetween(100, 3000),
            "order_total_product_price" => ($this->faker->numberBetween(1, 10) * $this->faker->numberBetween(100, 3000)),
            "order_status" => $this->faker->numberBetween(0, 1)
        ];
    }
}

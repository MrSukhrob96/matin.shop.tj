<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "brand_id" =>$this->faker->numberBetween(1, 10),
            "category_id" =>$this->faker->numberBetween(266, 315),
            "product_name" => $this->faker->name,
            "slug" => $this->faker->name,
            "product_price" => $this->faker->numberBetween(100, 3000),
            "product_img" => $this->faker->image('public\assets\images\products'),
            "product_description" => $this->faker->text,
            "product_sale" => $this->faker->numberBetween(0, 50),
            "product_rating" => $this->faker->numberBetween(0, 100)
        ];
    }
}

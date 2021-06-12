<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "category_name" => $this->faker->name,
            "slug" => $this->faker->name,
            "category_text" => $this->faker->text,
            "category_img" => $this->faker->image('public\assets\images\categories')
        ];
    }
}

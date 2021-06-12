<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "news_title" => $this->faker->name,
            "news_text" => $this->faker->text,
            "news_img" => $this->faker->image('./public/assets/images/news/')
        ];
    }
}

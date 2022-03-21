<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(mt_rand(3,10));
        $slug = Str::slug($title, '-');

        return [ 
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraphs(mt_rand(5,10), true),
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,3),
        ];
    }
}

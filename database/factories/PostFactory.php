<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     * @var Factory $factory
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => rand(1, 4),
            'title' => $this->faker->realText(rand(25, 30)),
            'except' => $this->faker->realText(rand(100, 120)),
            'body' => $this->faker->realText(rand(200, 300)),
            'created_at' => $this->faker->dateTime('-60 days', '-30 days'),
            'updated_at' => $this->faker->dateTime('-20 days', '-1 days'),
        ];
    }
}

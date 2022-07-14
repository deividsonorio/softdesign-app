<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => str_replace('.', '', $this->faker->sentence(5)),
            'author' => $this->faker->name(),
            'description' => $this->faker->text(100),
            'pages' => $this->faker->numberBetween(20, 500),
        ];
    }
}

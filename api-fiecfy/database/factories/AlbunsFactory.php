<?php

namespace Database\Factories;

use App\Models\Albuns;
use App\Models\Artistas;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbunsFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'release_year' => fake()->year(),
            'artistas_id' => \App\Models\Artistas::factory(),
            'cover_image' => fake()->imageUrl()
        ];
    }
}

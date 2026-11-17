<?php

namespace Database\Factories;

use App\Models\Artistas;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistasFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'genre' => fake()->name(),
            'profile_pic_url' => fake()->imageUrl(300, 300, 'people')
        ];
    }
}

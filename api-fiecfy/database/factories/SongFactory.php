<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()-> words(4, true),
            'duration_seconds' => fake()->numberBetween(120, 300),
            'is_explicit' => fake()->boolean(),
            'album_id' => \app\Models\Albuns::factory()
        ];
    }
}

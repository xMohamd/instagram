<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            'type' => $this->faker->randomElement(['image', 'video']),
            'url' => 'https://i.ibb.co/Jqh3rHv/img1.jpg',
            'size' => $this->faker->randomElement(['100kb', '200kb', '300kb']),
            'mime_type' =>  $this->faker->randomElement(['image/jpeg', 'image/png']),
        ];
    }
}

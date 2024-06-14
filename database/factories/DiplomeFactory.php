<?php

namespace Database\Factories;

use App\Models\Diplome;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diplome>
 */
class DiplomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Diplome::class;
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
        ];
    }
}

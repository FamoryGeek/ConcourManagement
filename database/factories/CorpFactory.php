<?php

namespace Database\Factories;

use App\Models\Corp;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Corp>
 */
class CorpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Corp::class;
    public function definition(): array
    {
        return [
            'nom' => $this->faker->jobTitle,
            'categorie_id' => \App\Models\Categorie::factory(),
            'cadre_id' => \App\Models\Cadre::factory(),
        ];
    }
}

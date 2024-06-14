<?php

namespace Database\Factories;

use App\Models\Cadre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cadre>
 */
class CadreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Cadre::class;
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
        ];
    }
}

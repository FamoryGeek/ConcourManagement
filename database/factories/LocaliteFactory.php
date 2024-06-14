<?php

namespace Database\Factories;

use App\Models\Localite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Localite>
 */
class LocaliteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Localite::class;
    public function definition(): array
    {
        return [
            'nom' => $this->faker->city,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Corp;
use App\Models\Specialite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialite>
 */
class SpecialiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Specialite::class;
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            'corp_id' => Corp::factory(),
        ];
    }
}

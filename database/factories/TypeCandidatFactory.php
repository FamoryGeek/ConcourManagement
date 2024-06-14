<?php

namespace Database\Factories;

use App\Models\TypeCandidat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeCandidat>
 */
class TypeCandidatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = TypeCandidat::class;
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Candidat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidat>
 */
class CandidatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Candidat::class;
    public function definition(): array
    {
        return [
            'nina' => $this->faker->unique()->regexify('[A-Za-z0-9]{15}'),
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'dateNaissance' => $this->faker->date(),
            'lieuNaissance' => $this->faker->city,
            'genre' => $this->faker->randomElement(['Homme', 'Femme']),
            'email' => $this->faker->unique()->safeEmail,
            'adresse' => $this->faker->address,
            'numero' => $this->faker->phoneNumber,
            'status' => $this->faker->randomElement(['Celibataire', 'Marié']),
            'etat' => $this->faker->boolean,
            'diplomeImage' => $this->faker->imageUrl(),
            'ficheIndividuelle' => $this->faker->imageUrl(),
            'lettreEquivalence' => $this->faker->imageUrl(),
            'certificatNationalite' => $this->faker->imageUrl(),
            'acteNaissance' => $this->faker->imageUrl(),
            'certificatMedical' => $this->faker->imageUrl(),
            'nina_image' => $this->faker->imageUrl(),
            'diplome_id' => \App\Models\Diplome::factory(),
            'type_candidat_id' => \App\Models\TypeCandidat::factory(),
            'corp_id' => \App\Models\Corp::factory(),
            'specialite_id' => \App\Models\Specialite::factory(),
            'localite_id' => \App\Models\Localite::factory(),
        ];
    }
}

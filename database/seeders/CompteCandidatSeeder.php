<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; // Assurez-vous d'importer DB si vous l'utilisez

class CompteCandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $compteCandidats = [];

        for ($i = 0; $i < 50; $i++) {
            $compteCandidats[] = [
                'password' => Hash::make('password'),
                'passwordVerified' => Hash::make('password'),
                'candidat_id' => 10 + $i,
            ];
        }

        // Insérer les données dans la table correspondante
        DB::table('compte_candidats')->insert($compteCandidats);
    }
}

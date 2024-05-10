<?php

namespace Database\Seeders;

use App\Models\Corp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $corps = [
            [
                'nom'=>' TECHNICIENS DE L\'INFORMATIQUE B2',
                'cadre_id'=> 18,
                'categorie_id' => 3
            ],
            [
                'nom'=>' TECHNICIENS DES ARTS ET DE LA CULTURE  ',
                'cadre_id'=> 7,
                'categorie_id' => 3
            ],
            [
                'nom'=>'  INGENIEURS DE L\'AGRICULTURE ET DU GENIE RURAL ',
                'cadre_id'=> 31,
                'categorie_id' => 1
            ],
            [
                'nom'=>'  TECHNICIENS DE L\'AGRICULTURE ET DU GENIE RURAL B2  ',
                'cadre_id'=> 31,
                'categorie_id' => 3
            ],
            [
                'nom'=>' AGENTS TECHNIQUES DE L\'AGRICULTURE ET DU GENIE RURAL C ',
                'cadre_id'=> 31,
                'categorie_id' => 4
            ],
            [
                'nom'=>' INGENIEUBS DES EAUX ET FORETS ',
                'cadre_id'=> 10,
                'categorie_id' => 1
            ],
            [
                'nom'=>' TECHNICIENS DES EAUX ET FORETS',
                'cadre_id'=> 10,
                'categorie_id' => 3
            ],
            [
                'nom'=>' AGENTS TECHNIQUES DES EAUX ET FORETS',
                'cadre_id'=> 10,
                'categorie_id' => 4
            ],

            [
                'nom'=>' ETERINAIRES ET INGENIEURS DE L\'ELEVAGE',
                'cadre_id'=> 12,
                'categorie_id' => 1
            ],
            [
                'nom'=>' TECHNICIENS DE L\'ELEVAGE',
                'cadre_id'=> 12,
                'categorie_id' => 3
            ],
            [
                'nom'=>'  AGENTS TECHNIQUES DE L\'ELEVAGE',
                'cadre_id'=> 12,
                'categorie_id' => 4
            ],
            [
                'nom'=>' INGENIEURS DES CONSTRUCTIONS CIVILES',
                'cadre_id'=> 8,
                'categorie_id' => 1
            ],
            [
                'nom'=>'TECHNICIENS DES CONSTRUCTIONS CIVILES (B2)',
                'cadre_id'=> 8,
                'categorie_id' => 3
            ],
            [
                'nom'=>'AGENTS TECHNIQUES DES CONSTRUCTIONS CIVILES (B1)',
                'cadre_id'=> 8,
                'categorie_id' => 2
            ],
            [
                'nom'=>' INGENIEURS DE L\'INDUSTRIE ET DES MINES',
                'cadre_id'=> 16,
                'categorie_id' => 1
            ],
            [
                'nom'=>'TECHNICIENS DE L\'INDUSTRIE ET DES MINES (B2)',
                'cadre_id'=> 16,
                'categorie_id' => 3
            ],
            [
                'nom'=>'TECHNICIENS DE L\'INDUSTRIE ET DES MINES (B1)',
                'cadre_id'=> 16,
                'categorie_id' => 2
            ],
            [
                'nom'=>'CONTROLEURS DES IMPÔTS (B1)',
                'cadre_id'=> 15,
                'categorie_id' => 2
            ],
            [
                'nom'=>' CONTROLEURS DES DOUANES (B1)',
                'cadre_id'=> 9,
                'categorie_id' => 2
            ],
            [
                'nom'=>'AGENTS DE CONSTATATION DES DOUANES (C)',
                'cadre_id'=> 9,
                'categorie_id' => 4
            ],
            [
                'nom'=>' CONTROLEURS DES SERVICES ECONOMIOUES (B2)',
                'cadre_id'=> 3,
                'categorie_id' => 3
            ],
            [
                'nom'=>'  JOURNALISTES ET REALISATEURS',
                'cadre_id'=> 17,
                'categorie_id' => 3
            ],
            [
                'nom'=>'  INSTRUCTEURS DE LA JEUNESSE ET DES SPORTS',
                'cadre_id'=> 19,
                'categorie_id' => 3
            ],
            [
                'nom'=>'  INGENIEURS DB LA STATISTIQUE',
                'cadre_id'=> 23,
                'categorie_id' => 1
            ],
            [
                'nom'=>' TECHNICIENS DE LA STATISTIQUE (B2)',
                'cadre_id'=> 23,
                'categorie_id' => 3
            ],
            [
                'nom'=>' MBDECINS SPECIALISTES (NIVEAU DES)',
                'cadre_id'=> 22,
                'categorie_id' => 5
            ],
            [
                'nom'=>'MEDECINS SPECIALISTES (NIVEAU FMOS/PHA)',
                'cadre_id'=> 22,
                'categorie_id' => 4
            ],
            [
                'nom'=>'INGENIEURS SANITAIRES',
                'cadre_id'=> 22,
                'categorie_id' => 1
            ],
            [
                'nom'=>' TECHNICIENS SUPERIEURS DE SANTE (B2)',
                'cadre_id'=> 22,
                'categorie_id' => 3
            ],
            [
                'nom'=>' TECHNICIENS DE SANTE (B1)',
                'cadre_id'=> 22,
                'categorie_id' => 2
            ],


        ];
        foreach ($corps as $key => $corp) {
            Corp::create($corp);
        }
    }
}

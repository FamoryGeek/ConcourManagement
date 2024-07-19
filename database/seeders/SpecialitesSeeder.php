<?php

namespace Database\Seeders;

use App\Models\Specialite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialites = [
            [
                'nom' => 'INFORMATIQUE DE GESTION',
                'corp_id' => 2
            ],
            [
                'nom' => 'MAINTENANCE',
                'corp_id' => 2
            ],
            [
                'nom' => 'ARCHIVES',
                'corp_id' => 3
            ],
            [
                'nom' => 'DOCUMENTATION',
                'corp_id' => 3
            ],
            [
                'nom' => 'ANIMATION SOCIOCULTURELLE',
                'corp_id' => 3
            ],
            [
                'nom' => 'ARTS DRAMATIQUES',
                'corp_id' => 3
            ],
            [
                'nom' => 'AGRICULTURE',
                'corp_id' => 4
            ],
            [
                'nom' => 'AGRONOMIE',
                'corp_id' => 4
            ],
            [
                'nom' => 'PRODUCTION VEGETALE',
                'corp_id' => 4
            ],
            [
                'nom' => 'ENTOMOLOGIE (VEGETALE)',
                'corp_id' => 4
            ],
            [
                'nom' => 'GENIE RURAL',
                'corp_id' => 4
            ],
            [
                'nom' => 'AMENAGEMENT HYDRO AGRICOLE',
                'corp_id' => 4
            ],
            [
                'nom' => 'SELECTIONNEUR',
                'corp_id' => 4
            ],
            [
                'nom' => 'AGROECONOMIE',
                'corp_id' => 5
            ],
            [
                'nom' => 'PHYTOPATHOLOGIE',
                'corp_id' => 5
            ],
            [
                'nom' => 'AGRICULTURE',
                'corp_id' => 5
            ],
            [
                'nom' => 'AGRONOMIE',
                'corp_id' => 5
            ],
            [
                'nom' => 'PRODUCTION VEGETALE',
                'corp_id' => 5
            ],
            [
                'nom' => 'GENIE RURAL',
                'corp_id' => 5
            ],
            [
                'nom' => 'AMENAGEMENT HYDRO-AGRICOLE',
                'corp_id' => 5
            ],
            [
                'nom' => 'AMELIORATION ET PRODUCTION DE SBMENCES',
                'corp_id' => 5
            ],
            [
                'nom' => 'TECHNOLOGIE DE SEMENCES',
                'corp_id' => 5
            ],
            [
                'nom' => 'AGRICULTURE',
                'corp_id' => 6
            ],
            [
                'nom' => 'MACHINISME AGRICOLE',
                'corp_id' => 6
            ],
            [
                'nom' => 'EAUX ET FORÊTS',
                'corp_id' => 7
            ],
            [
                'nom' => 'BIOLOGIE',
                'corp_id' => 7
            ],
            [
                'nom' => 'ENVIRONNEMENT OU ECOLOGIE',
                'corp_id' => 7
            ],
            [
                'nom' => 'ENVIRONNEMENT',
                'corp_id' => 7
            ],
            [
                'nom' => 'EAUX ET FORÊTS',
                'corp_id' => 8
            ],
            [
                'nom' => 'AQUACULTURE',
                'corp_id' => 8
            ],
            [
                'nom' => 'EAUX ET FORÊTS',
                'corp_id' => 9
            ],
            [
                'nom' => 'AQUACULTURE',
                'corp_id' => 9
            ],
            [
                'nom' => 'ELEVAGE',
                'corp_id' => 10
            ],
            [
                'nom' => 'ZOOTECHNIE',
                'corp_id' => 10
            ],
            [
                'nom' => 'MÉDECINE VÉTÉRINAIRE (NIVEAU DOCTORAT)',
                'corp_id' => 10
            ],
            [
                'nom' => 'ELEVAGE',
                'corp_id' => 11
            ],
            [
                'nom' => 'ELEVAGE',
                'corp_id' => 12
            ],
            [
                'nom' => 'BATIMENT',
                'corp_id' => 13
            ],
            [
                'nom' => 'TOPOGRAPHIE',
                'corp_id' => 13
            ],
            [
                'nom' => 'CARTOGRAPHIE',
                'corp_id' => 13
            ],
            [
                'nom' => 'TRAVAUX PUBLICS',
                'corp_id' => 13
            ],
            [
                'nom' => 'ARCHITECTURE',
                'corp_id' => 13
            ],
            [
                'nom' => 'BATIMENT',
                'corp_id' => 14
            ],
            [
                'nom' => 'TOPOGRAPHIE',
                'corp_id' => 14
            ],
            [
                'nom' => 'TRAVAUX PUBLICS',
                'corp_id' => 14
            ],
            [
                'nom' => 'PLOMBERIE SANITAIRE',
                'corp_id' => 15
            ],
            [
                'nom' => 'HYDRAULIQUE',
                'corp_id' => 16
            ],
            [
                'nom' => 'HYDROGEOLOGIE',
                'corp_id' => 16
            ],
            [
                'nom' => 'ELECTRICITE',
                'corp_id' => 16
            ],
            [
                'nom' => 'ENERGETIQUE',
                'corp_id' => 16
            ],
            [
                'nom' => 'EXPLOITATION MINIÈRE',
                'corp_id' => 16
            ],
            [
                'nom' => 'METALLOGENIE',
                'corp_id' => 16
            ],
            [
                'nom' => 'GEOLOGIE',
                'corp_id' => 16
            ],
            [
                'nom' => 'GEOTECHNIQUE',
                'corp_id' => 16
            ],
            [
                'nom' => 'CHIMIE',
                'corp_id' => 16
            ],
            [
                'nom' => 'GENIE INDUSTRIEL ET MAINTENANCE (MÉCANIQUE)',
                'corp_id' => 17
            ],
            [
                'nom' => 'EXPLOITATION MINIÈRE',
                'corp_id' => 17
            ],
            [
                'nom' => 'GEOLOGIE',
                'corp_id' => 17
            ],
            [
                'nom' => 'MÉCANIQUE AUTO',
                'corp_id' => 18
            ],
            [
                'nom' => 'HYDRAULIQUE',
                'corp_id' => 18
            ],
            [
                'nom' => 'FROID',
                'corp_id' => 18
            ],
            [
                'nom' => 'CLIMATISATION',
                'corp_id' => 18
            ],
            [
                'nom' => 'GEOLOGIE',
                'corp_id' => 18
            ],
            [
                'nom' => 'CHIMIE',
                'corp_id' => 18
            ],
            [
                'nom' => 'ÉLECTRONIQUE INDUSTRIELLE',
                'corp_id' => 18
            ],
            [
                'nom' => 'IMPÔTS',
                'corp_id' => 19
            ],
            [
                'nom' => 'DOUANES',
                'corp_id' => 20
            ],
            [
                'nom' => 'TRANSIT',
                'corp_id' => 21
            ],
            [
                'nom' => 'DOUANES',
                'corp_id' => 21
            ],
            [
                'nom' => 'GESTION DES ENTREPRISES ET ADMINISTRATIONS',
                'corp_id' => 22
            ],
            [
                'nom' => 'MARKETING',
                'corp_id' => 22
            ],
            [
                'nom' => 'TECHNIQUES DE COMMERCIALISATION',
                'corp_id' => 22
            ],
            [
                'nom' => 'COMMERCE INTERNATIONAL',
                'corp_id' => 22
            ],
            [
                'nom' => 'JOURNALISME ET COMMUNICATION',
                'corp_id' => 23
            ],
            [
                'nom' => 'SPORT (SCIENCES ET TECHNIQUES DES ACTIVITÉS PHYSIQUES ET SPORTIVES)',
                'corp_id' => 24
            ],
            [
                'nom' => 'ANIMATION SOCIO-ÉDUCATIVE (SCIENCES ET TECHNIQUES DE L\'ANIMATION)',
                'corp_id' => 24
            ],
            [
                'nom' => 'STATISTIQUE',
                'corp_id' => 25
            ],
            [
                'nom' => 'STATISTIQUE ET TRAITEMENT INFORMATIQUE DES DONNÉES',
                'corp_id' => 26
            ],
            [
                'nom' => 'ANESTHÉSIE',
                'corp_id' => 27
            ],
            [
                'nom' => 'RÉANIMATION',
                'corp_id' => 27
            ],
            [
                'nom' => 'BIOLOGIE MÉDICALE',
                'corp_id' => 27
            ],
            [
                'nom' => 'CARDIOLOGIE',
                'corp_id' => 27
            ],
            [
                'nom' => 'CHIRURGIE GÉNÉRALE',
                'corp_id' => 27
            ],
            [
                'nom' => 'CHIRURGIE PÉDIATRIQUE',
                'corp_id' => 27
            ],
            [
                'nom' => 'DERMATOLOGIE',
                'corp_id' => 27
            ],
            [
                'nom' => 'LÉPROLOGIE',
                'corp_id' => 27
            ],
            [
                'nom' => 'DIABÉTOLOGIE',
                'corp_id' => 27
            ],
            [
                'nom' => 'ENDOCRINOLOGIE MALADIES MÉTABOLIQUES',
                'corp_id' => 27
            ],
            [
                'nom' => 'GYNECOLOGIE-OBSTÉTRIQUE',
                'corp_id' => 27
            ],
            [
                'nom' => 'NÉPHROLOGIE ET HÉMODIALYSE',
                'corp_id' => 27
            ],
            [
                'nom' => 'OPHTALMOLOGIE',
                'corp_id' => 27
            ],
            [
                'nom' => 'PÉDIATRIE',
                'corp_id' => 27
            ],
            [
                'nom' => 'RADIOLOGIE',
                'corp_id' => 27
            ],
            [
                'nom' => 'IMAGERIE MÉDICALE',
                'corp_id' => 27
            ],
            [
                'nom' => 'RHUMATOLOGIE',
                'corp_id' => 27
            ],
            [
                'nom' => 'STOMATOLOGIE ET CHIRURGIE MAXILLO-FACIALE',
                'corp_id' => 27
            ],
            [
                'nom' => 'TRAUMATOLOGIE-ORTHOPÉDIQUE',
                'corp_id' => 27
            ],
            [
                'nom' => 'MÉDECINE GÉNÉRALE',
                'corp_id' => 28
            ],
            [
                'nom' => 'PHARMACIE GÉNÉRALE',
                'corp_id' => 28
            ],
            [
                'nom' => 'ODONTOSTOMATOLOGIE',
                'corp_id' => 28
            ],
            [
                'nom' => 'BIOLOGIE MÉDICALE (MAINTENANCE DES APPAREILS BIOMÉDICAUX)',
                'corp_id' => 29
            ],
            [
                'nom' => 'HYGIÈNE ASSAINISSEMENT',
                'corp_id' => 29
            ],
            [
                'nom' => 'INFIRMIER D\'ÉTAT',
                'corp_id' => 30
            ],
            [
                'nom' => 'SAGE-FEMME',
                'corp_id' => 30
            ],
            [
                'nom' => 'LABO-PHARMACIE',
                'corp_id' => 30
            ],
            [
                'nom' => 'BIOLOGIE MÉDICALE',
                'corp_id' => 30
            ],
            [
                'nom' => 'ORL',
                'corp_id' => 30
            ],
            [
                'nom' => 'INFIRMIER (SANTÉ PUBLIQUE)',
                'corp_id' => 31
            ],
            [
                'nom' => 'OBSTÉTRIQUE',
                'corp_id' => 31
            ],
            [
                'nom' => 'LABO-PHARMACIE',
                'corp_id' => 31
            ],
            [
                'nom' => 'IMAGERIE MÉDICALE',
                'corp_id' => 32
            ],
            [
                'nom' => 'RADIOLOGIE',
                'corp_id' => 32
            ],
            [
                'nom' => 'ANESTHÉSIE',
                'corp_id' => 32
            ],
            [
                'nom' => 'RÉANIMATION',
                'corp_id' => 32
            ],
            [
                'nom' => 'ODONTOSTOMATOLOGIE',
                'corp_id' => 32
            ],
            [
                'nom' => 'OPHTALMOLOGIE',
                'corp_id' => 32
            ],
        ];

        foreach ($specialites as $key => $specialite) {
            Specialite::create($specialite);
        }
    }
}

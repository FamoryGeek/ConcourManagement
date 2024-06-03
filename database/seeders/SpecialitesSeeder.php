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
                'nom' => 'Informatique de Gestion',
                'corp_id' => 2
            ],
            [
                'nom' => 'Maintenance',
                'corp_id' => 2
            ],
            [
                'nom' => 'ARCHIVES',
                'corp_id' => 3
            ],
            [
                'nom' => 'DOCUMENTATION',
                'corp_id' =>   3
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
                'nom' => ' GENIE RURAL',
                'corp_id' => 5
            ],
            [
                'nom' => 'AMENAGEMENT HYDRO-AGRICOLE',
                'corp_id' => 5
            ],
            [
                'nom' => ' AMELIORATION ET PRODUCTION DE SBMENCES',
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
                'nom' => '  Eaux et Forêts',
                'corp_id' => 7
            ],
            [
                'nom' => ' Biologie',
                'corp_id' => 7
            ],
            [
                'nom' => ' Environnement ou Ecologie',
                'corp_id' => 7
            ],
            [
                'nom' => 'Environnement',
                'corp_id' => 7
            ],
            [
                'nom' => 'Eaux et Forêts',
                'corp_id' => 8
            ],
            [
                'nom' => 'Aquaculture',
                'corp_id' => 8
            ],
            [
                'nom' => 'Eaux et Forêts',
                'corp_id' => 9
            ],
            [
                'nom' => 'Aquaculture',
                'corp_id' => 9
            ],


            [
                'nom' => 'Elevage',
                'corp_id' => 10
            ],
            [
                'nom' => 'Zootechnie',
                'corp_id' => 10
            ],
            [
                'nom' => 'Médecine vétérinaire (niveau Doctorat)',
                'corp_id' => 10
            ],
            [
                'nom' => 'Elevage',
                'corp_id' => 11
            ],
            [
                'nom' => 'Elevage',
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
                'nom' => ' EXPLOITATION MINIERE',
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
                'nom' => 'GENIE INDUSTRIEL ET MAINTENANCE (MECANIQUE)',
                'corp_id' => 17
            ],
            [
                'nom' => 'EXPLOITATION MINIERE',
                'corp_id' => 17
            ],
            [
                'nom' => 'GEOLOGIE',
                'corp_id' => 17
            ],
            [
                'nom' => 'MECANIQUE AUTO',
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
                'nom' => ' ELECTRONIQUE INDUSTRIELLE',
                'corp_id' => 18
            ],
            [
                'nom' => 'Impôts',
                'corp_id' => 19
            ],
            [
                'nom' => 'Douanes',
                'corp_id' => 20
            ],
            [
                'nom' => 'Transit',
                'corp_id' => 21
            ],
            [
                'nom' => 'Douanes',
                'corp_id' => 21
            ],

            [
                'nom' => 'Gestion des Entreprises et Administrations',
                'corp_id' => 22
            ],
            [
                'nom' => 'Marketing',
                'corp_id' => 22
            ],
            [
                'nom' => 'Techniques de Commercialisation',
                'corp_id' => 22
            ],
            [
                'nom' => 'Commerce International',
                'corp_id' => 22
            ],
            [
                'nom' => 'Journalisme et Communication',
                'corp_id' => 23
            ],
            [
                'nom' => 'Sport (Sciences et techniques des activités physiques et sportives)',
                'corp_id' => 24
            ],
            [
                'nom' => 'Animation Socio-éducative (Sciences et techniques de L\'animation)',
                'corp_id' => 24
            ],


            [
                'nom' => 'Statistique',
                'corp_id' => 25
            ],
            [
                'nom' => ' Statistique et Traitement informatique des données',
                'corp_id' => 26
            ],
            [
                'nom' => 'Anesthésiel',
                'corp_id' => 27
            ],
            [
                'nom' => 'Réanimation',
                'corp_id' => 27
            ],
            [
                'nom' => 'Biologie médicale',
                'corp_id' => 27
            ],
            [
                'nom' => 'Cardiologie',
                'corp_id' => 27
            ],
            [
                'nom' => 'Chirurgie générale',
                'corp_id' => 27
            ],
            [
                'nom' => ' Chirurgie pédiatrique',
                'corp_id' => 27
            ],
            [
                'nom' => 'Dermatologie',
                'corp_id' => 27
            ],
            [
                'nom' => 'Léprologie',
                'corp_id' => 27
            ],
            [
                'nom' => 'Diabétologie',
                'corp_id' => 27
            ],
            [
                'nom' => 'Endocrinologie maladies métaboliques',
                'corp_id' => 27
            ],
            [
                'nom' => ' Gynécologie-Obstétrique',
                'corp_id' => 27
            ],
            [
                'nom' => 'Néphrologie et Hémodialyse',
                'corp_id' => 27
            ],
            [
                'nom' => 'Ophtalmologie',
                'corp_id' => 27
            ],
            [
                'nom' => 'Pédiatrie',
                'corp_id' => 27
            ],
            [
                'nom' => 'Radiologie',
                'corp_id' => 27
            ],
            [
                'nom' => 'Imagerie médicale',
                'corp_id' => 27
            ],
            [
                'nom' => 'Rhumatologie',
                'corp_id' => 27
            ],
            [
                'nom' => 'Stomatologie et chirurgie maxillo-faciale',
                'corp_id' => 27
            ],
            [
                'nom' => 'Traumatologie-Orthopédique',
                'corp_id' => 27
            ],
            [
                'nom' => 'Médecine générale',
                'corp_id' => 28
            ],
            [
                'nom' => 'Pharmacie générale',
                'corp_id' => 28
            ],
            [
                'nom' => 'Odontostomatologie',
                'corp_id' => 28
            ],
            [
                'nom' => 'Biologie médicale (Maintenance des appareils biomédicaux)',
                'corp_id' => 29
            ],
            [
                'nom' => 'Hygiène Assainissement',
                'corp_id' => 29
            ],
            [
                'nom' => 'Infirmier d\'Etat',
                'corp_id' => 30
            ],
            [
                'nom' => 'Sage-femme',
                'corp_id' => 30
            ],
            [
                'nom' => 'Labo-pharmacie',
                'corp_id' => 30
            ],
            [
                'nom' => 'Biologie médicale',
                'corp_id' => 30
            ],
            [
                'nom' => 'ORL',
                'corp_id' => 30
            ],
            [
                'nom' => 'Infirmier (Santé publique)',
                'corp_id' => 31
            ],
            [
                'nom' => 'Obstétrique',
                'corp_id' => 31
            ],
            [
                'nom' => 'Labo-pharmacie',
                'corp_id' => 31
            ],
            [
                'nom' => 'Imagerie médicale',
                'corp_id' => 32
            ],
            [
                'nom' => 'Radiologie',
                'corp_id' => 32
            ],
            [
                'nom' => 'Anesthésie',
                'corp_id' => 32
            ],
            [
                'nom' => 'Réanimation',
                'corp_id' => 32
            ],
            [
                'nom' => 'Odontostomatologie',
                'corp_id' => 32
            ],
            [
                'nom' => 'Ophtalmologie',
                'corp_id' => 32
            ],

        ];
        foreach ($specialites as $key => $specialite) {
            Specialite::create($specialite);
        }
    }
}

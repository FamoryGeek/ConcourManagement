<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('specialites', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->timestamps();
        });
        DB::table('specialites')->insert([
            ['nom' => 'ACRIDOLOGIE'],
            ['nom' => 'ADMINISTRATION DES AFFAIRES'],
            ['nom' => 'ADMINISTRATION PUBLIQUE'],
            ['nom' => 'AGRICULTURE'],
            ['nom' => 'AGRO-ECONOMIE'],
            ['nom' => 'AGROMETEOROLOGIE'],
            ['nom' => 'AGRONOMIE'],
            ['nom' => 'AIDE-COMPTABLE'],
            ['nom' => 'ALLEMAND'],
            ['nom' => ' ALLEMAND-ANGLAIS BILINGUE'],
            ['nom' => 'AMELIORATION DES VEGETAUX'],
            ['nom' => 'AMENAGEMENT'],
            ['nom' => 'AMENAGEMENT TERRITOIRE GESTION URBAINE'],
            ['nom' => 'ANALYSE'],
            ['nom' => ' ANALYSE FINANCIERE'],
            ['nom' => 'ANALYSE NUMERIQUE'],
            ['nom' => 'ANALYSE P-ADIQUE'],
            ['nom' => ' ANALYSE QUANTITATIVE ET POLITIQUE ECONOMIQUE'],
            ['nom' => ' ANALYSE-PRATIQUES DU  DEVELOPPEMENT'],
            ['nom' => 'ANALYSE-PROGRAMMATION INFORMATIQUE'],
            ['nom' => 'ANALYSTE-PROGRAMMEUR'],
            ['nom' => 'ANATOMIE'],
            ['nom' => 'ANATOMIE-PATHOLOGIE'],
            ['nom' => 'ANESTHESIE-REANIMATION'],
            ['nom' => 'ANGLAIS'],
            ['nom' => 'ANGLAIS-Français'],
            ['nom' => 'ANIMATION DU DEVELOPPEMENT'],
            ['nom' => 'ANIMATION PRODUCTION REPORTAGE'],
            ['nom' => 'ANIMATION SOCIOCULTURELLE'],
            ['nom' => 'ANIMATION SOCIO-EDUCATIVE'],
            ['nom' => 'ANTHROPOLOGIE CHANGEM. SOCIAL ET DEVELOPPEMENT'],
            ['nom' => 'ANTHROPOLOGIE DU CHANGEMNT SOCIAL EY DEVELOPP.'],
            ['nom' => ' ANTHROPOLOGIE MEDICALE'],
            ['nom' => 'ANTHROPOLOGIE VISUELLE'],
            ['nom' => 'ANTRHOPOLOGIE'],
            ['nom' => 'APICULTURE'],
            ['nom' => 'AQUACULTURE'],
            ['nom' => 'ARABE'],
            ['nom' => 'ARCHEOLOGIE'],
            ['nom' => 'ARCHITECTURE'],
            ['nom' => 'ARCHIVES'],
            ['nom' => 'ARTS'],
            ['nom' => ' ARTS DRAMATIQUES'],
            ['nom' => 'ARTS PLASTIQUES'],
            ['nom' => 'ASSURANCES'],
            ['nom' => 'AUDIO-FREQUENCE'],
            ['nom' => 'AUDIT ET CONTRÔLE DE GESTION'],
            ['nom' => 'AVICULTURE'],
            ['nom' => 'BACTERIOILOGIE'],
            ['nom' => 'BANQUE'],
            ['nom' => 'BATIMENT'],
            ['nom' => 'BIBLIOTHECONOMIE'],
            ['nom' => 'BIJOUTERIE'],
            ['nom' => 'BIOCHIMIE'],
            ['nom' => ' BIOCHIMIE ALIMENTAIRE'],
            ['nom' => 'BIOCHIMIE CLINIQUE'],
            ['nom' => 'BIOCHIMIE-MICROBIOLOGIE'],
            ['nom' => 'BIO-INFORMATIQUE'],
            ['nom' => 'BIOLOGIE'],
            ['nom' => 'BIOLOGIE ANIMALE'],
            ['nom' => 'BIOLOGIE GENETIQUE'],
            ['nom' => 'BIOLOGIE MEDICALE'],
            ['nom' => 'BIOLOGIE MOLECULAIRE APPLIQUEE'],
            ['nom' => 'BIOLOGIE VEGETALE'],
            ['nom' => 'BIOMETRIE'],
            ['nom' => 'BIO-STATISTIQUE SANITAIRE'],
            ['nom' => ' BLOC OPERATOIRE'],
            ['nom' => 'BOBINAGE'],
            ['nom' => 'BOTANIQUE'],
            ['nom' => 'BROMATOLOGIE'],
            ['nom' => 'BUREAUTIQUE ET TECHNIQUES DE COMMUNICATION'],
            ['nom' => 'CAMERA'],
            ['nom' => 'CANCEROLOGIE'],
            ['nom' => 'CARDIOLOGIE'],
            ['nom' => 'CARTOGRAPHIE'],
            ['nom' => 'CARTOGRAPHIE'],
            ['nom' => 'CHAUFFEUR'],
            ['nom' => 'CHIMIE'],
            ['nom' => 'CHIMIE ANALYTIQUE'],
            ['nom' => 'CHIMIE APPLIQUEE'],
            ['nom' => 'CHIMIE DES MATERIAUX'],
            ['nom' => 'CHIMIE INDUSTRIELLE'],
            ['nom' => 'CHIMIE MINERALE'],
            ['nom' => 'CHIMIE ORGANIQUE'],
            ['nom' => ' CHIMIE ORGANIQUE ET SUBSTANCES NATURELLES'],
            ['nom' => 'CHIMIE THERAPEUTIQUE'],
            ['nom' => ' CHIMIE-BIOLOGIE'],
            ['nom' => 'CHINOIS'],
            ['nom' => 'CHIRURGIE DENTAIRE'],
            ['nom' => 'CHIRURGIE GENERALE'],
            ['nom' => 'CHIRURGIE INFANTILE'],
            ['nom' => 'CHIRURGIE PEDIATRIQUE'],
            ['nom' => 'CHIRURGIE PLASTIQUE'],
            ['nom' => 'CHIRURGIE THORACIQUE'],
            ['nom' => 'CHRISTALLOGRAPHIE'],
            ['nom' => 'CINEMATOGRAPHIE'],
            ['nom' => 'CIVILISATION ANGLAISE'],
            ['nom' => ' CIVILISATION ARABE'],
            ['nom' => 'CLIMATOLOGIE'],
            ['nom' => ' COMMERCE INTERNATIONAL'],
            ['nom' => 'COMMERCE-DISTRIBUTION'],
            ['nom' => 'COMMUNICATION'],
            ['nom' => 'COMPTABILITE'],
            ['nom' => 'COMPTABILITE-GESTION'],
            ['nom' => 'CONDUITE DE TRAVAUX'],
            ['nom' => 'CONSTRUCTION METALLIQUE'],
            ['nom' => 'CONSTRUCTIONS CIVILES'],
            ['nom' => 'CRIMINOLOGIE'],
            ['nom' => 'CRISTALLOCHIMIE'],
            ['nom' => 'CRISTALLOGRAPHIE'],
            ['nom' => 'CRYPTOGRAPHIE'],
            ['nom' => 'CYCLE PROJETS PROGRAMMES ET POLITIQUE DE DEVELOPEMENT'],
            ['nom' => 'DECORATION ET MODELAGE ARTICLES INDUSTRIE TEXTILE'],
            ['nom' => 'DEMOGRAPHIE'],
            ['nom' => 'DERMATOLOGIE'],
            ['nom' => 'DESSIN D\'ART'],
            ['nom' => 'DESSIN INDUSTRIEL'],
            ['nom' => 'DESSIN-BÂTIMENT'],
            ['nom' => 'DEVELOPPEMENT DURABLE'],
            ['nom' => ' DEVELOPPEMENT LOCAL (CYCLE PROJET ET PROGRAMME)'],
            ['nom' => 'DEVELOPPEMENT SOCIAL'],
            ['nom' => 'DIABETOLOGIE'],
            ['nom' => 'DIDACTIQUE DES MATHEMATIQUES'],
            ['nom' => 'DOCUMENTATION'],
            ['nom' => 'DOUANE'],
            ['nom' => 'DROIT DE LA PROPRITE INTELLECTUELLE'],
            ['nom' => ' DROIT DE L\'ENVIRONNEMENT'],
            ['nom' => 'DROIT DES AFFAIRES'],
            ['nom' => ' DROIT DU TRAVAIL'],
            ['nom' => ' DROIT INTERNATIONAL ENVIRONNEMENT'],
            ['nom' => 'DROIT INTERNATIONAL PUBLIC'],
            ['nom' => 'DROIT PRIVE'],
            ['nom' => 'DROIT PUBLIC'],
            ['nom' => 'DROITS DE L\'HOMME'],
            ['nom' => 'EAUX ET FORÊTS'],
            ['nom' => 'ECHANGES INTERCULTURELS'],
            ['nom' => 'ECOLOGIE APPLIQUEE'],
            ['nom' => 'ECONOMETRIE'],
            ['nom' => 'ECONOMIE APPLIQUEE'],
            ['nom' => 'ECONOMIE COOPERATIVE'],
            ['nom' => ' ECONOMIE ET ORGANISATION DE L\'INDUSTRIE ALIMENTAIRE'],
            ['nom' => 'ECONOMIE FAMILIALE'],
            ['nom' => 'ECONOMIE GENERALE'],
            ['nom' => 'ECONOMIE INDUSTRIELLE'],
            ['nom' => 'ECONOMIE INTERNATIONALE'],
            ['nom' => 'ECONOMIE PETROLIERE'],
            ['nom' => 'ECONOMIE PUBLIQUE'],
            ['nom' => 'ECONOMIE RURALE'],
            ['nom' => 'ECONOMIE SANITAIRE'],
            ['nom' => 'EDUCATION PHYSIQUE ET SPORTIVE'],
            ['nom' => 'EDUCATION PRESCOLAIRE'],
            ['nom' => 'EDUCATION PRESCOLAIRE 1ER CYCLE'],
            ['nom' => 'EDUCATION PRESCOLAIRE 2EME CYCLE'],
            ['nom' => 'EDUCATION SPECIALE'],
            ['nom' => ' EDUCATION SURVEILLEE'],
            ['nom' => ' ELECTRICITE'],
            ['nom' => ' ELECTRICITE-AUTO'],
            ['nom' => 'ELECTRICITE-BÂTIMENT'],
            ['nom' => 'ELECTROMECANIQUE'],
            ['nom' => ' ELECTRONIQUE'],
            ['nom' => 'ELECTRONIQUE AUDIOVISUELLE'],
            ['nom' => 'ELEVAGE'],
            ['nom' => ' EMPLOYE DE BUREAU'],
            ['nom' => 'ENERGETIQUE'],
            ['nom' => 'ENERGIE EOLIENNE'],
            ['nom' => 'ENERGIE SOLAIRE'],
            ['nom' => 'ENSEIGNEMENT MENAGER'],
            ['nom' => 'ENTOMOLOGIE'],
            ['nom' => ' ENTOMOLOGIE MOLECULAIRE MEDICALE'],
            ['nom' => 'ENVIRONNEMENT'],
            ['nom' => 'ENVIRONNEMENT CHIMIQUE'],
            ['nom' => 'EPIDEMIOLOGIE'],
            ['nom' => 'ESPAGNOL'],
            ['nom' => 'ETHNOLOGIE'],
            ['nom' => 'ETUDE ET RECHERCHE POUR LE DEVELOPPEMENT'],
            ['nom' => 'ETUDES ISLAMIQUES'],
            ['nom' => 'ETUDES SUPERIEURES BANCAIRES ET FINANCIERES'],
            ['nom' => 'EXPERTISE EN TECHNIQUES MINIERES'],
            ['nom' => 'EXPERTISE-COMPTABLE'],
            ['nom' => 'EXPLOITATION MINIERE'],
            ['nom' => 'FAUNE'],
            ['nom' => 'FINANCE'],
            ['nom' => 'FINANCE-COMPTABILITE'],
            ['nom' => 'FINANCES PUBLIQUES'],
            ['nom' => 'FISCALITE'],
            ['nom' => 'FONDERIE'],
            ['nom' => 'FORAGE ET EXTRACTION DU PETROLE ET GAZ'],
            ['nom' => 'FROID'],
            ['nom' => 'GALENIQUE'],
            ['nom' => 'GENETIQUE'],
            ['nom' => 'GENIE CIVIL'],
            ['nom' => 'GENIE DES PROCEDES'],
            ['nom' => 'GENIE DES PROCEDES'],
            ['nom' => ' GENIE INDUSTRIEL ET MAINTENANCE'],
            ['nom' => 'GENIE RURAL'],
            ['nom' => 'GENIE SANITAIRE'],
            ['nom' => 'GEODESIE'],
            ['nom' => 'GEOGRAPHIE'],
            ['nom' => ' GEOGRAPHIE DES TRANSPORTS'],
            ['nom' => 'GEOGRAPHIE ECONOMIQUE'],
            ['nom' => 'GEOGRAPHIE HUMAINE'],
            ['nom' => 'GEOGRAPHIE PHYSIQUE'],
            ['nom' => 'GEOGRAPHIE RURALE'],
            ['nom' => 'GEOGRAPHIE URBAINE'],
            ['nom' => 'GEOGRAPHIE-AMENAGEMENT'],
            ['nom' => 'GEOGRAPHIE-DEVELOPPEMENT'],
            ['nom' => 'GEOLOGIE'],
            ['nom' => 'GEOLOGIE APPLIQUEE'],
            ['nom' => 'GEOLOGIE D\'EVALUATION DES RESERVES'],
            ['nom' => 'GEOLOGIE ENVIRONNEMENTALE'],
            ['nom' => 'GEOLOGIE PETROLIERE'],
            ['nom' => 'GEOMETRIE'],
            ['nom' => 'GEOMETRIE DIFFERENCIELLE'],
            ['nom' => 'GEOPHYSIQUE'],
            ['nom' => 'GEOSTATISTIQUE'],
            ['nom' => 'GEOTECHNIQUE'],
            ['nom' => 'GESTION'],
            ['nom' => 'GESTION DE POLITIQUE ECONOMIQUE'],
            ['nom' => 'GESTION DES COLLECTIVITES TERRITORIALES'],
            ['nom' => 'GESTION DES RESSOURCES HUMAINES'],
            ['nom' => 'GESTION DES SERVICES DE SANTE'],
            ['nom' => ' GESTION DU PATRIMOINE CULTUREL'],
            ['nom' => 'GESTION ECONOMIQUE-  MANAGEMENT DE PROJETS'],
            ['nom' => 'GESTION EXPLOITATIONS RURALES'],
            ['nom' => 'GESTION FINANCIERE'],
            ['nom' => 'GESTION HOSPITALIERE'],
            ['nom' => 'GESTION INSTITUTIONS CULTURELLES'],
            ['nom' => 'GRAMMAIRE'],
            ['nom' => 'GUIDE D\'EXPOSITION'],
            ['nom' => 'GUITARE'],
            ['nom' => 'GYNECOLOGIE-OBSTETRIQUE'],
            ['nom' => 'HEMATOLOGIE'],
            ['nom' => 'HEPATITE'],
            ['nom' => ' HEPATO GASTRO'],
            ['nom' => ' HISTO-EMBRYOLOGIE'],
            ['nom' => 'HISTOIRE'],
            ['nom' => 'HISTOIRE DE L\'ART'],
            ['nom' => 'HISTOIRE MEDIEVALE'],
            ['nom' => 'HISTOIRE MODERNE CONTEMPORAINE'],
            ['nom' => 'HISTOIRE- SCIENCE DE LA TERRE'],
            ['nom' => ' HISTOIRE-ARCHEOLOGIE'],
            ['nom' => 'HISTOIRE-GEOGRAPHIE'],
            ['nom' => 'HOTELLERIE'],
            ['nom' => 'HYDRAULIQUE'],
            ['nom' => 'HYDRAULIQUE AGRICOLE'],
            ['nom' => 'HYDROGEOLOGIE'],
            ['nom' => 'HYDROLOGIE'],
            ['nom' => 'HYDROTECHNIQUE'],
            ['nom' => ' HYGIENNE ASSAINISSEMENT'],
            ['nom' => ' HYSTO-EMBRYOLOGIE'],
            ['nom' => ' IMAGERIE MEDICALE'],
            ['nom' => 'IMMUNOLOGIE'],
            ['nom' => 'IMPOT'],
            ['nom' => 'INFECTIOLOGIE'],
            ['nom' => 'INFIRMIER'],
            ['nom' => ' INFIRMIER DE SANTE'],
            ['nom' => 'INFIRMIER D\'ETAT'],
            ['nom' => 'INFORMATIQUE'],
            ['nom' => 'INFORMATIQUE BUREAUTIQUE'],
            ['nom' => 'INFORMATIQUE DE GESTION'],
            ['nom' => 'INFORMATIQUE DE GESTION MIAGE'],
            ['nom' => ' INGENIEUR DU GENIE CIVIL'],
            ['nom' => 'INGENIEURIE TRANSPORT ET LOGISTIQUE'],
            ['nom' => 'JOURNALISME'],
            ['nom' => 'KINESITHERAPIE'],
            ['nom' => 'LABO-PHARMACIE'],
            ['nom' => 'LANGUE-DESSIN-MUSIQUE'],
            ['nom' => ' LANGUES-LETTRES'],
            ['nom' => 'LEGISLATION'],
            ['nom' => 'LEPROLOGIE'],
            ['nom' => 'LETTRES'],
            ['nom' => 'LETTRES-HISTOIRE-GEOGRAPHIE'],
            ['nom' => 'LICENCE PROFESSIONNELLE'],
            ['nom' => 'LINGUISTIQUE ANGLAIS'],
            ['nom' => 'LINGUISTIQUE ARABE'],
            ['nom' => ' LINGUISTIQUE FRANCAISE'],
            ['nom' => 'LINGUISTIQUE RUSSE'],
            ['nom' => ' LITTERARURE RUSSE'],
            ['nom' => 'LITTERATURE ALLEMANDE'],
            ['nom' => 'LITTÉRATURE ANGLAISE'],
            ['nom' => 'LITTERATURE ARABE'],
            ['nom' => 'LITTÉRATURE FRANCAISE'],
            ['nom' => 'MACHINISME AGRICOLE'],
            ['nom' => 'MACONNERIE'],
            ['nom' => ' MACRO-ECONOMIE'],
            ['nom' => ' MAGISTRAT ORDRE ADMINISTRATIF'],
            ['nom' => 'MAGISTRAT ORDRE JUDICIAIRE'],
            ['nom' => 'MAINTENANCE BIOMEDICALE'],
            ['nom' => 'MAINTENANCE ELECTRONIQUE'],
            ['nom' => 'MAINTENANCE INDUSTRIELLE'],
            ['nom' => 'MAINTENANCE INFORMATIQUE'],
            ['nom' => ' MAITRISE DES SCIENCES ET TECHNIQUES COMPT. ET FINAN.'],
            ['nom' => 'MAITRISE SCIENCES ET TECH. COMMERC. INTERNAT.'],
            ['nom' => 'MALADIES INFECTUEUSES TROPICALES'],
            ['nom' => 'MANAGEMENT ENTRETIEN TRAVAUX ROUTIERS'],
            ['nom' => 'MANAGEMENT FINANCIER'],
            ['nom' => 'MANAGEMENT MUNICIPAL'],
            ['nom' => 'MANAGEMENT PROJETS ET ORGANISATION'],
            ['nom' => 'MANAGEMENT STRATEGIQUE DE L\'ENTREPRISE'],
            ['nom' => 'MARKETING'],
            ['nom' => 'MARKETING ET COMMERCE INTERNATIONAL'],
            ['nom' => 'MAROQUINERIE'],
            ['nom' => 'MASTER PROFESSIONNEL'],
            ['nom' => 'MATHEMATIQUES'],
            ['nom' => 'MATHEMATIQUES APPLIQUEES'],
            ['nom' => 'MATHEMATIQUES FINANCIERES'],
            ['nom' => 'MATHEMATIQUES-PHYSIQUE'],
            ['nom' => 'MATH-PYSIQUE-CHIMIE-TECHNOLOGIE'],
            ['nom' => 'MECANIQUE DES FLUIDES'],
            ['nom' => 'MECANIQUE DES SOLS'],
            ['nom' => 'MECANIQUE EXPERIMENTAL DES FLUIDES ET THERMIQUE'],
            ['nom' => 'MECANIQUE GENERALE'],
            ['nom' => 'MECANIQUE-AUTO'],
            ['nom' => 'MECANIQUES DES ROUTES'],
            ['nom' => 'MEDECINE COMMUNAUTAIRE'],
            ['nom' => 'MEDECINE DU TRAVAIL'],
            ['nom ' => ' MEDECINE D\'URGENCE ET CATASTROPHE'],
            ['nom' => 'MEDECINE GENERALE'],
            ['nom' => 'MEDECINE INTERNE'],
            ['nom' => 'MEDECINE LEGALE'],
            ['nom' => 'MEDECINE NUCLEAIRE'],
            ['nom' => 'MEDECINE SPORTIVE'],
            ['nom' => 'MEDECINE TRANSFUSIONNELLE'],
            ['nom' => 'MEDECINE VETERINAIRE'],
            ['nom' => 'MEDIATEUR PEDAGOGIQUE'],
            ['nom' => 'MENUISERIE METALLIQUE'],
            ['nom' => 'MENUISERIE-BOIS'],
            ['nom' => 'METALLOGENIE'],
            ['nom' => 'METALLURGIE'],
            ['nom' => 'METEOROLOGIE'],
            ['nom' => 'METHODE D\'ANALYSE DES SYSTEMES DE SANTE'],
            ['nom' => 'METHODOLOGIE ANGLAIS'],
            ['nom' => 'METHODOLOGIE ARABE'],
            ['nom' => 'METIERS D\'ARTS'],
            ['nom' => 'MICROBIOLOGIE'],
            ['nom' => 'MICROBIOLOGIE VETERINAIRE'],
            ['nom' => 'MICRO-ECONOMIE'],
            ['nom' => 'MINES'],
            ['nom' => 'MISE EN SCENE'],
            ['nom' => 'MONTAGE'],
            ['nom' => 'MUSIQUE'],
            ['nom' => 'NAGEUR'],
            ['nom' => 'NEPHROLOGIE'],
            ['nom' => 'NEUROCHIRURGIE'],
            ['nom' => 'NEUROLOGIE'],
            ['nom' => 'NUTITION ANIMALE'],
            ['nom' => 'NUTRITION HUMAINE'],
            ['nom' => 'OBSTETRIQUE'],
            ['nom' => ' ODONTO-STOMATOLOGIE'],
            ['nom' => 'ONCOLOGIE'],
            ['nom' => 'OPHTALMOLOGIE'],
            ['nom' => 'OPTOMETRIE'],
            ['nom' => ' ORGANISATION ET GESTION DES ORGANISATIONS'],
            ['nom' => 'ORNITHOLOGIE'],
            ['nom' => 'ORTHOPEDIE-TRAUMATOLOGIE'],
            ['nom' => 'OTO-RHINO-LARYNGOLOGIE'],
            ['nom' => 'PARASITOLOGIE ANIMALE'],
            ['nom' => ' PARASITOLOGIE MEDICALE'],
            ['nom' => 'PARASITOLOGIE MOLECULAIRE'],
            ['nom' => 'PARODONTOLOGIE'],
            ['nom' => 'PASTORALISME'],
            ['nom' => 'PEDAGOGIE ARABE'],
            ['nom' => 'PEDAGOGIE EN SCIENCE DE LA SANTE'],
            ['nom' => 'PEDIATRIE'],
            ['nom' => 'PEDOLOGIE'],
            ['nom' => 'PEINTURE'],
            ['nom' => 'PETROCHIMIE'],
            ['nom' => 'PHARMACIE'],
            ['nom' => 'PHARMACIE HOSPITALIERE'],
            ['nom' => 'PHARMACIE-BIOLOGIE'],
            ['nom' => 'PHARMACOGNOSIE'],
            ['nom' => 'PHARMACOLOGIE'],
            ['nom' => 'PHILOLOGIE'],
            ['nom' => 'PHILOSOPHIE'],
            ['nom' => 'PHYSIOLOGIE ANIMALE'],
            ['nom' => 'PHYSIOLOGIE VEGETALE'],
            ['nom' => 'PHYSIQUE'],
            ['nom' => 'PHYSIQUE APPLIQUEE'],
            ['nom' => 'PHYSIQUE ENERGETIQUE'],
            ['nom' => 'PHYSIQUE NUCLEAIRE'],
            ['nom' => 'PHYSIQUE THEORIQUE ET APPLIQUEE'],
            ['nom' => 'PHYSIQUE-CHIMIE'],
            ['nom' => 'PHYTO-ECOLOGIE'],
            ['nom' => 'PHYTOPATOLOGIE'],
            ['nom' => ' PLANIFICATION ECONOMIQUE'],
            ['nom' => 'PLANIFICATION ET GESTION EDUCATION'],
            ['nom' => 'PLANIFICATION REGIONALE ET AMENAGEMENT DU TERRITOIRE'],
            ['nom' => ' PLOMBERIE SANITAIRE'],
            ['nom' => 'PNEUMO-PHTISIOLOGIE'],
            ['nom' => 'POLITOLOGIE'],
            ['nom' => 'POPULATION-ENVIRONNEMENT'],
            ['nom' => 'POPULATION-ENVIRONNEMENT'],
            ['nom' => 'PREHISTOIRE'],
            ['nom' => 'PREMIER CYCLE GENERALISTE'],
            ['nom' => 'PRESSE ET REALISATION'],
            ['nom' => 'PRODUCTION ANIMALE'],
            ['nom' => 'PRODUCTION AUDIOVISUELLE'],
            ['nom' => 'PRODUCTION FOURRAGERE'],
            ['nom' => ' PRODUCTION HORTICOLE'],
            ['nom' => ' PROTECTION DES VEGETAUX'],
            ['nom' => 'PROTHESE DENTAIRE'],
            ['nom' => 'PSYCHIATRIE'],
            ['nom' => 'PSYCHOLOGIE'],
            ['nom' => 'PSYCHOLOGIE SOCIALE'],
            ['nom' => 'PSYCHOLOGUE-CLINICIEN'],
            ['nom' => ' PSYCHO-PEDAGOGIE'],
            ['nom' => ' RADIO THERAPIE'],
            ['nom' => 'RADIOELECTRICITE'],
            ['nom' => 'RADIOLOGIE-IMAGERIE MEDICALE'],
            ['nom' => 'RADIOPROTECTION'],
            ['nom' => 'RAFFINAGE DES COLORANTS ORGANIQUES'],
            ['nom' => 'RAFFINAGE ET PETROCHIMIE'],
            ['nom' => 'RECHERCHE OPERATIONNELLE'],
            ['nom' => 'RELATIONS INTERNATIONALES'],
            ['nom' => 'RESEAUX INFORMATIQUES'],
            ['nom' => 'RESISTANCE DES MATERIAUX'],
            ['nom' => 'RESSOURCES HUMAINES'],
            ['nom' => 'RHUMATOLOGIE'],
            ['nom' => 'ROUTES'],
            ['nom' => 'RUSSE'],
            ['nom' => 'SAGE FEMME'],
            ['nom' => 'SANTE MATERNELLE ET INFANTILE'],
            ['nom' => 'SANTE MENTALE'],
            ['nom' => ' SANTE PUBLIQUE'],
            ['nom' => ' SCIENCE NAT-AGRIC-ELEV-TECHNOLOGIE'],
            ['nom' => 'SCIENCES'],
            ['nom' => 'SCIENCES BIOLOGIQUES'],
            ['nom' => ' SCIENCES DE LA POPULATION ET DU DEVELOPPEMENT'],
            ['nom' => 'SCIENCES DE L\'EDUCATION'],
            ['nom' => 'SCIENCES DE L\'INFORMATION DOCUMENTAIRE'],
            ['nom' => 'SCIENCES DU SOL'],
            ['nom' => 'SCIENCES ET TECHNIQUES COMMERCIALES'],
            ['nom' => 'SCIENCES ET TECHNIQUES COMMERCIALES INTERNAT.'],
            ['nom' => 'SCIENCES ET TECHNIQUES DE LA COMMUNICATION'],
            ['nom' => 'SCIENCES ET TECHNIQUES DE L\'ANIMATION'],
            ['nom' => ' SCIENCES ISLAMIQUES'],
            ['nom' => ' SCIENCES PENITENTIAIRE'],
            ['nom' => 'SCIENCES PHARMACEUTIQUES'],
            ['nom' => 'SCIENCES POLITIQUES'],
            ['nom' => 'SCULPTURE'],
            ['nom' => 'SECOND CYCLE GENERALISTE'],
            ['nom' => 'SECRETAIRE-ASSISTANT DE GESTION'],
            ['nom' => 'SECRETARIAT BUREAUTIQUE'],
            ['nom' => 'SECRETARIAT DE DIRECTION'],
            ['nom' => 'SELECTIONNEUR'],
            ['nom' => 'SEMENCE'],
            ['nom' => 'SERVICE SOCIAL SPECIALISE'],
            ['nom' => 'SOCIO-ANTROPOLOGIE'],
            ['nom' => 'SOCIOLOGIE'],
            ['nom' => 'STATISTIQUES'],
            ['nom' => 'STOMATOLOGIE'],
            ['nom' => 'STRUCTURALISTE'],
            ['nom' => 'STRUCTURES'],
            ['nom' => 'SUBSTANCES NATURELLES'],
            ['nom' => 'SYSTÈME D\'INFORMATIONS GEOGRAPHIQUES'],
            ['nom' => 'SYSTEMES ELECTRIQUES'],
            ['nom' => 'SYSTEMES FINANCIERS RURAUX'],
            ['nom' => 'TECHNIQUE DE SEMENCE'],
            ['nom' => 'TECHNIQUES ADMINISTRATIVES COMPTABLES'],
            ['nom' => ' TECHNIQUES AUDIOVISUELLES ET TELECOMMUNICATION'],
            ['nom' => ' TECHNIQUES DE COMMERCIALISATION'],
            ['nom' => 'TECHNIQUES D\'EXPRESSION'],
            ['nom' => 'TECHNOLOGIE'],
            ['nom' => ' TECHNOLOGIE ALIMENTAIRE'],
            ['nom' => 'TECHNOLOGIE DE LA VIANDE'],
            ['nom' => 'TECHNOLOGIE DU POISSON'],
            ['nom' => 'TECHNOLOGIE DU SUCRE ET SUBSTANCES SACHAREUSES'],
            ['nom' => 'TELECOMMUNICATIONS HF'],
            ['nom' => 'TELEDETECTION'],
            ['nom' => 'TELEDETECTION TOPOGRAPHIQUE'],
            ['nom' => 'THEATROLOGIE'],
            ['nom' => 'THERMODYNAMIQUE'],
            ['nom' => 'TISSAGE'],
            ['nom' => 'TOPOGRAPHIE'],
            ['nom' => 'TOURISME'],
            ['nom' => 'TOXICOLOGIE'],
            ['nom' => 'TRADUCTION RUSSE'],
            ['nom' => 'TRAITEMENT DU PETROLE ET GAZ  GENIE CHIMIQUE'],
            ['nom' => 'TRANSIT'],
            ['nom' => 'TRANSPORT-LOGISTIQUE'],
            ['nom' => 'TRAUMATOLOGIE'],
            ['nom' => ' TRAVAIL SOCIAL'],
            ['nom' => 'TRAVAUX PUBLICS'],
            ['nom' => 'URBANISME'],
            ['nom' => 'UROLOGIE'],
            ['nom' => 'VULGARISATION AGRICOLE'],
            ['nom' => 'ZOOTECHNIE']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialites');
    }
};

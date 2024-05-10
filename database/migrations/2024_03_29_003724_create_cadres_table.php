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
        Schema::create('cadres', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->timestamps();
        });
        DB::table('cadres')->insert([
            ['nom' => 'ADMINISTRATION GENERALE'],
            ['nom' => 'CORPS PREFECTORAL'],
            ['nom' => 'SERVICES ECONOMIQUES'],
            ['nom' => 'AFFAIRES ETRANGERES'],
            ['nom' => 'ACTION SOCIALE'],
            ['nom' => 'ACTION SOCIALE'],
            ['nom' => 'ARTS ET CULTURE'],
            ['nom' => 'CONSTRUCTIONS CIVILES'],
            ['nom' => 'DOUANE'],
            ['nom' => 'EAUX ET FORETS'],
            ['nom' => 'ENSEIGNEMENT'],
            ['nom' => 'ELEVAGE'],
            ['nom' => 'FINANCES'],
            ['nom' => 'JUSTICE'],
            ['nom' => 'IMPOTS'],
            ['nom' => 'INDUSTRIE ET MINES'],
            ['nom' => 'INFORMATION ET AUDIOVISUEL'],
            ['nom' => 'INFORMATIQUE'],
            ['nom' => 'JEUNESSE ET SPORTS'],
            ['nom' => 'METEOROLOGIE'],
            ['nom' => 'NAVIGATION AERIENNEPLANIFICATION'],
            ['nom' => 'SANTE PUBLIQUE'],
            ['nom' => 'STATISTIQUE'],
            ['nom' => 'TOURISME'],
            ['nom' => 'TRAVAIL ET SECURITE SOCIALE'],
            ['nom' => 'TRESOR'],
            ['nom' => 'SERVICE PENITENTIAIRE ET EDUCATION SURVEILLEE'],
            ['nom' => 'PROTECTION CIVILE'],
            ['nom' => 'GESTION DES RESSOURCES HUMAINES'],
            ['nom' => 'EMPLOI'],
            ['nom' => 'AGRICULTURE ET GENIE RURAL']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadres');
    }
};

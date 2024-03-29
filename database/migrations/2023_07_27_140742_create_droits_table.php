<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('droits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->boolean('acces');
            $table->string('route', 50);
            $table->foreignId('type_droit_id')->constrained('type_droits')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('droits')->insert([
            [
                'nom' => 'Droits',
                'acces' => 1,
                'route' => 'droit.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Roles',
                'acces' => 1,
                'route' => 'role.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Utilisateurs',
                'acces' => 1,
                'route' => 'user.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Cadres',
                'acces' => 1,
                'route' => 'cadre.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Candidats',
                'acces' => 1,
                'route' => 'candidat.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Categories',
                'acces' => 1,
                'route' => 'categorie.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Centres',
                'acces' => 1,
                'route' => 'centre.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Concours',
                'acces' => 1,
                'route' => 'concour.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Corps',
                'acces' => 1,
                'route' => 'corp.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Diplômes',
                'acces' => 1,
                'route' => 'diplome.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Localités',
                'acces' => 1,
                'route' => 'localite.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Modules',
                'acces' => 1,
                'route' => 'module.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Notes',
                'acces' => 1,
                'route' => 'note.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Programmations',
                'acces' => 1,
                'route' => 'programmation.index',
                'type_droit_id' => 3,
            ],
            [
                'nom' => 'Type Candidats',
                'acces' => 1,
                'route' => 'typeCandidat.index',
                'type_droit_id' => 3,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('droits');
    }
};

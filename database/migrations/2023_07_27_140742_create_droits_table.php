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
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Candidats',
                'acces' => 1,
                'route' => 'candidat.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Categories',
                'acces' => 1,
                'route' => 'categorie.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Centres',
                'acces' => 1,
                'route' => 'centre.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Concours',
                'acces' => 1,
                'route' => 'concour.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Corps',
                'acces' => 1,
                'route' => 'corp.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Specialites',
                'acces' => 1,
                'route' => 'specialite.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Diplômes',
                'acces' => 1,
                'route' => 'diplome.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Localités',
                'acces' => 1,
                'route' => 'localite.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Modules',
                'acces' => 1,
                'route' => 'module.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Notes',
                'acces' => 1,
                'route' => 'note.index',
                'type_droit_id' => 2,
            ],
            [
                'nom' => 'Programmations',
                'acces' => 1,
                'route' => 'programmation.index',
                'type_droit_id' => 2,
            ],
            [
                'nom' => 'Type Candidats',
                'acces' => 1,
                'route' => 'type-candidat.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Anciens Sujets',
                'acces' => 1,
                'route' => 'anciens-sujets.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Session',
                'acces' => 1,
                'route' => 'session.index',
                'type_droit_id' => 1,
            ],
            [
                'nom' => 'Parametre Selection',
                'acces' => 1,
                'route' => 'parametre-selection.index',
                'type_droit_id' => 1,
            ]
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

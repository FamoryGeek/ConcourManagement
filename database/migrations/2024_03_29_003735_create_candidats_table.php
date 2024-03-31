<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('nina',15)->unique();
            $table->string('nom',255);
            $table->string('prenom',255);
            $table->date('dateNaissance');
            $table->string('lieuNaissance',255);
            $table->string('genre',10);
            $table->string('adresse',255);
            $table->string('numero',20);
            $table->string('status',30);
            $table->longText('diplomeImage');
            $table->longText('ficheIndividuelle');
            $table->longText('lettreEquivalence');
            $table->longText('certificatNationalite');
            $table->longText('acteNaissance');
            $table->longText('certificatMedical');
            $table->longText('nina_image');
            $table->foreignIdFor(\App\Models\Diplome::class)->constrained();
            $table->foreignIdFor(\App\Models\TypeCandidat::class)->constrained();
            $table->foreignIdFor(\App\Models\corp::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};

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
        Schema::create('corps', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('specialite',100);
            $table->foreignIdFor(\App\Models\Categorie::class)->constrained();
            $table->foreignIdFor(\App\Models\Cadre::class)->constrained();
            $table->timestamps();
        });
        DB::table('corps')->insert([
            [
                'nom' => 'INGENIEUR INFORMATICIEN',
                'specialite' => 'INFORMATIQUE DE GESTION',
                'cadre_id' => 18,
                'categorie_id' => 1
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corps');
    }
};

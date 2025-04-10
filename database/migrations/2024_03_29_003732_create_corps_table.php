<?php

use App\Models\Specialite;
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
            //$table->foreignIdFor(Specialite::class)->constrained();
            $table->foreignIdFor(\App\Models\Categorie::class)->constrained();
            $table->foreignIdFor(\App\Models\Cadre::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('corps')->insert([
            [
                'nom' => 'INGENIEUR INFORMATICIEN',
                'cadre_id' => 17,
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

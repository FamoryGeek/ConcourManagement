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
        Schema::create('type_candidats', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->timestamps();
        });
        DB::table('type_candidats')->insert([
            ['nom' => 'Régulier'],
            ['nom' => 'Contractuel']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_candidats');
    }
};

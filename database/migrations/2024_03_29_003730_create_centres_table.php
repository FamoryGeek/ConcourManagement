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
        Schema::create('centres', function (Blueprint $table) {
            $table->id();
            $table->string('nom',50);
            $table->foreignIdFor(\App\Models\Localite::class)->constrained();
            $table->timestamps();
        });
        DB::table('centres')->insert([
            [
                'nom' => 'ECICA',
                'localite_id' => 1
            ],
            [
                'nom' => 'ASKIA MOHAMED',
                'localite_id' => 1
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centres');
    }
};

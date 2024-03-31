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
        Schema::create('localites', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->timestamps();
        });
        DB::table('localites')->insert([
            ['nom' => 'Bamako'],
            ['nom' => 'Mopti'],
            ['nom' => 'Gao'],
            ['nom' => 'Kayes'],
            ['nom' => 'Sikasso'],
            ['nom' => 'Ségou'],
            ['nom' => 'Tombouctou']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localites');
    }
};

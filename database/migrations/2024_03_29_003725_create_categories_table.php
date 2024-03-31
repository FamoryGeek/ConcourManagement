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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->timestamps();
        });
        DB::table('categories')->insert([
            ['nom' => 'A'],
            ['nom' => 'B1'],
            ['nom' => 'B2'],
            ['nom' => 'C'],
            ['nom' => 'D'],
            ['nom' => 'E']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

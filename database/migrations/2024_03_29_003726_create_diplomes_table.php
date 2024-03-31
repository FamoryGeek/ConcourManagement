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
        Schema::create('diplomes', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->timestamps();
        });
        DB::table('diplomes')->insert([
            ['nom' => 'CAP'],
            ['nom' => 'BT2'],
            ['nom' => 'DES'],
            ['nom' => 'DUT/DEUG'],
            ['nom' => 'Licence'],
            ['nom' => 'Master'],
            ['nom' => 'Doctorat/DEA'],
            ['nom' => 'Maîtrise']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diplomes');
    }
};

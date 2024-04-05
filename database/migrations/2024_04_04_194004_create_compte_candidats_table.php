<?php

use App\Models\Candidat;
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
        Schema::create('compte_candidats', function (Blueprint $table) {
            $table->id();
            $table->string('password')->default('password');
            $table->string('passwordVerified');
            $table->foreignIdFor(Candidat::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compte_candidats');
    }
};

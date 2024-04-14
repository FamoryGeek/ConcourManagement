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
        Schema::create('programmations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignIdFor(\App\Models\Centre::class)->constrained();
            $table->foreignIdFor(\App\Models\Corp::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmations');
    }
};

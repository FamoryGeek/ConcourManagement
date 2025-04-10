<?php

use App\Models\Corp;
use App\Models\Session;
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
        Schema::create('param_selections', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignIdFor(Corp::class)->constrained();
            $table->foreignIdFor(Session::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('param_selections');
    }
};

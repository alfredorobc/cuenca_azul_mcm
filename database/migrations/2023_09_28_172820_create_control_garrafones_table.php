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
        Schema::create('control_garrafones', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_salida');
            $table->dateTime('fecha_entrada')->nullable(true);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('garrafon_id')->references('id')->on('garrafones')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_garrafones');
    }
};

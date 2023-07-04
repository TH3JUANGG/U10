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
        Schema::create('conexions', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->string('N_Telefono');
            $table->string('Correo_Electronico');
            $table->string('Empresa');
            $table->string('Observacion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conexions');
    }
};

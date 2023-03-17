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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('cif');
            $table->string('denominacion');
            $table->string('direccion');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('telefono');
            $table->string('pagina_web');
            $table->string('email');
            $table->integer('antiguedad');
            $table->string('actividad_cnae');
            $table->string('forma_juridica');
            $table->date('fecha_constitucion');
            $table->text('objeto_social');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};

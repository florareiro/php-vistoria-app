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
        Schema::create('vistorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cnh');
            $table->string('selfie');
            $table->string('placa');
            $table->string('chassi');
            $table->string('renavam');
            $table->string('uf');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('km'); 
            $table->decimal('nivel_combustivel', 8, 2); 
            $table->string('foto_placa');
            $table->string('foto_dianteira');
            $table->string('foto_traseira');
            $table->string('foto_hodometro');
            $table->string('foto_banco');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vistorias');
    }
};

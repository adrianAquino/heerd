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
        Schema::create('racas', function (Blueprint $table) {
            $table->id('codRaca'); // Chave primária personalizada
            $table->string('nome', 255);
            $table->string('tipoRaca', 255);
            $table->text('descricao');
            $table->string('origemRaca', 255);
            $table->enum('raca_status', ['Ativo', 'Inativo'])->default('Ativo'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('racas');
    }
};

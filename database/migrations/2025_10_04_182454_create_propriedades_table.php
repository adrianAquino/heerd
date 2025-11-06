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
        Schema::create('propriedades', function (Blueprint $table) {
            $table->id('codPropriedades'); // PK
            $table->unsignedBigInteger('idProdutores'); // FK
            $table->string('nome', 255);
            $table->string('cidade', 255);
            $table->string('estado', 45);
            $table->string('estrada_rua', 255); // Corrigido nome da coluna
            $table->decimal('areaTotal', 10, 3);
            $table->decimal('latitude', 9, 6);
            $table->decimal('longitude', 9, 6);
            $table->integer('quantidadeAnimais');
            $table->string('responsavelTecnico', 255)->nullable();
            $table->enum('propriedade_status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();

            //  Chave estrangeira
            $table->foreign('idProdutores')
                  ->references('codProdutores')
                  ->on('produtores')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propriedades');
    }
};

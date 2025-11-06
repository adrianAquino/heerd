<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a criação da tabela 'loteDaPropriedadeComAnimais'.
     */
    public function up(): void
    {
        Schema::create('loteDaPropriedadeComAnimais', function (Blueprint $table) {
            // Chave primária
            $table->id('codLoteDaPropriedadeAnimais');

            // Chave estrangeira -> propriedade
            $table->unsignedBigInteger('idPropriedade')->nullable();

            // Demais campos
            $table->string('nome', 100);
            $table->date('dataCriacao')->nullable();
            $table->string('finalidadeLote', 150)->nullable();
            $table->integer('quantidadeAnimais')->default(0);
            $table->string('localizacaoLote', 150)->nullable();
            $table->string('racaPredominante', 100)->nullable();
            $table->boolean('loteDaPropriedadeAnimais_status')->default(true);

            // Campos automáticos do Laravel
            $table->timestamps();

            // Definição da foreign key
            $table->foreign('idPropriedade')
                  ->references('codPropriedades')
                  ->on('propriedades')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverte a criação da tabela.
     */
    public function down(): void
    {
        Schema::dropIfExists('loteDaPropriedadeComAnimais');
    }
};


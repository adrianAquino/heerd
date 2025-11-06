<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a criação da tabela 'itensDoLoteAnimais'.
     */
    public function up(): void
    {
        Schema::create('itensDoLoteAnimais', function (Blueprint $table) {
            // Chave primária
            $table->id('coditensDoLotePropriedadeAnimais');

            // Chaves estrangeiras
            $table->unsignedBigInteger('idAnimais')->nullable();
            $table->unsignedBigInteger('idLotePropriedadeAnimais')->nullable();

            // Demais campos
            $table->date('dataEntrada')->nullable();
            $table->date('dataSaida')->nullable();
            $table->string('motivoSaida', 150)->nullable();
            $table->text('observacoes')->nullable();

            // Campos automáticos do Laravel
            $table->timestamps();

            // Foreign keys
            $table->foreign('idAnimais')
                  ->references('codAnimais')
                  ->on('animais')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            $table->foreign('idLotePropriedadeAnimais')
                  ->references('codLoteDaPropriedadeAnimais')
                  ->on('loteDaPropriedadeComAnimais')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverte a criação da tabela.
     */
    public function down(): void
    {
        Schema::dropIfExists('itensDoLoteAnimais');
    }
};

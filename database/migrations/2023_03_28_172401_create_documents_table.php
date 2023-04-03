<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Criar a tabela 'documents' com as colunas necessárias
        Schema::create('documents', function (Blueprint $table) {
            $table->id(); // Adicionar uma coluna 'id' com chave primária
            $table->timestamps(); // Adicionar colunas 'created_at' e 'updated_at' para rastrear quando os documentos foram criados ou atualizados
            $table->unsignedBigInteger('category_id'); // Alterando coluna para unsignedBigInteger
            $table->string('title', 60); // Adicionar uma coluna 'title' para o título do documento
            $table->text('contents'); // Adicionar uma coluna 'contents' para o conteúdo do documento
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Excluir a tabela 'documents'
        Schema::dropIfExists('documents');
    }
};
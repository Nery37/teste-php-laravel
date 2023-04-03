<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


//O primeiro problema é que a classe anônima retornada pela migration não tem um nome definido.
//Isso pode levar a problemas de depuração, pois quando ocorrer um erro durante a execução da migração, o Laravel não será capaz de identificar qual migração exatamente falhou
class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Criar a tabela 'categories' com as colunas necessárias
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Adicionar uma coluna 'id' com chave primária
            $table->timestamps(); // Adicionar colunas 'created_at' e 'updated_at' para rastrear quando as categorias foram criadas ou atualizadas
            $table->string('name', 255)->unique(); // Definir um índice único para a coluna 'name' para garantir que cada categoria tenha um nome exclusivo
            // Adicionar uma coluna 'slug' para SEO (opcional)
            //$table->string('slug', 255)->unique();
            });
            }
            
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Excluir a tabela 'categories'
        Schema::dropIfExists('categories');
    }
}
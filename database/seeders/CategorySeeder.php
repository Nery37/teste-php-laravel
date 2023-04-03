<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserir registros usando o método 'create' do Eloquent ORM
        Category::create(['name' => 'Remessa Parcial']);
        Category::create(['name' => 'Remessa']);
    }
}

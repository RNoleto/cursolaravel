<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run tCategoria:factory() database seeds.
     */
    public function run(): void
    {
        Categoria::factory(5)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Category::create([
            'name' => 'Noticias',
        ]);
        Category::create([
            'name' => 'Alertas',
        ]);
        Category::create([
            'name' => 'Información',
        ]);
    }
}

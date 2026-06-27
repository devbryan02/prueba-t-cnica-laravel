<?php

namespace Database\Seeders;

use App\Features\Category\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Tecnologia', 'description' => 'Todo relacionado con tecnologia y gadgets'],
            ['name' => 'Muebles', 'description' => 'Todo relacionado con muebles y decoracion'],
            ['name' => 'Libros', 'description' => 'Todo relacionado con libros'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

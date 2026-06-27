<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Features\Product\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $products = [
            ['name' => 'Laptop', 'description' => 'Laptop de alta gama', 'price' => 1500.00, 'category_id' => 1],
            ['name' => 'Silla', 'description' => 'Silla ergonómica', 'price' => 200.00, 'category_id' => 2],
            ['name' => 'Libro de programación', 'description' => 'Libro sobre programación en PHP', 'price' => 30.00, 'category_id' => 3],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

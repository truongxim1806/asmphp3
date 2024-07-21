<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 10.00,
            'image' => 'path_to_image1.jpg'
        ]);
        Product::create([
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 20.00,
            'image' => 'path_to_image2.jpg'
        ]);
    }
}

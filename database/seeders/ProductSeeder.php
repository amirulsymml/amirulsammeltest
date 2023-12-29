<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['name' => 'C', 'price' => '56.89', 'details' => 'Details of product c', 'publish' => 'Yess'],
            ['name' => 'B', 'price' => '23.33', 'details' => 'Details of product b', 'publish' => 'Yess'],
            ['name' => 'A', 'price' => '60.56', 'details' => 'Details of product a', 'publish' => 'No'],
            ['name' => 'D', 'price' => '99.99', 'details' => 'Details of product d', 'publish' => 'Yess'],
        ]);
    }
}

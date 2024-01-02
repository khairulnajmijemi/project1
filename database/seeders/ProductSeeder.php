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
            ['name' => 'a', 'price' => '00.00', 'details' => 'this is product a', 'publish' => 'yes'],
            ['name' => 'b', 'price' => '00.00', 'details' => 'this is product b', 'publish' => 'yes'],
            ['name' => 'c', 'price' => '00.00', 'details' => 'this is product c', 'publish' => 'no'],
        ]);
    }
}

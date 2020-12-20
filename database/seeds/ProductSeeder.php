<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Sport Wear Women',
            'price' => '90.00',
            'description' => 'This is some text for the Sport wear woman',
            'image' => '15058911sportwearWomen1.jpeg',
            'cat_id' => 2,
            'stock'  => 50,
        ]);

        Product::create([
            'name' => 'T-Shirt Men',
            'price' => '60.00',
            'description' => 'This is some text for T-Shirt Men',
            'image' => '53144672shirts4.jpeg',
            'cat_id' => 1,
            'stock'  => 50
        ]);

        Product::create([
            'name' => 'Jeans bantloan',
            'price' => '70.00',
            'description' => 'This is some text for the Jeans bantloan',
            'image' => '11347846jeans.jpeg',
            'cat_id' => 1,
            'stock'  => 50,
        ]);

        Product::create([
            'name' => 'Pullovar',
            'price' => '50.00',
            'description' => 'This is some text for the Pullovar',
            'image' => '93821774pullover.png',
            'cat_id' => 2,
            'stock'  => 50,
        ]);
    }
}

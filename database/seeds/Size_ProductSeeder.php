<?php

use App\Size_Product;
use Illuminate\Database\Seeder;

class Size_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size_Product::create([
            'size_id'    => 1,
            'product_id' => 1
        ]);

        Size_Product::create([
            'size_id'    => 2,
            'product_id' => 1
        ]);

        Size_Product::create([
            'size_id'    => 3,
            'product_id' => 1
        ]);

        Size_Product::create([
            'size_id'    => 4,
            'product_id' => 1
        ]);

        Size_Product::create([
            'size_id'    => 5,
            'product_id' => 1
        ]);

        Size_Product::create([
            'size_id'    => 2,
            'product_id' => 2
        ]);

        Size_Product::create([
            'size_id'    => 3,
            'product_id' => 2
        ]);

        Size_Product::create([
            'size_id'    => 4,
            'product_id' => 2
        ]);

        Size_Product::create([
            'size_id'    => 5,
            'product_id' => 2
        ]);

        Size_Product::create([
            'size_id'    => 6,
            'product_id' => 2
        ]);

        Size_Product::create([
            'size_id'    => 1,
            'product_id' => 3
        ]);

        Size_Product::create([
            'size_id'    => 2,
            'product_id' => 3
        ]);

        Size_Product::create([
            'size_id'    => 3,
            'product_id' => 3
        ]);

        Size_Product::create([
            'size_id'    => 4,
            'product_id' => 3
        ]);

        Size_Product::create([
            'size_id'    => 5,
            'product_id' => 3
        ]);
        Size_Product::create([
            'size_id'    => 1,
            'product_id' => 4
        ]);

        Size_Product::create([
            'size_id'    => 2,
            'product_id' => 4
        ]);

        Size_Product::create([
            'size_id'    => 3,
            'product_id' => 4
        ]);

        Size_Product::create([
            'size_id'    => 4,
            'product_id' => 4
        ]);

        Size_Product::create([
            'size_id'    => 5,
            'product_id' => 4
        ]);

        Size_Product::create([
            'size_id'    => 6,
            'product_id' => 4
        ]);
    }
}

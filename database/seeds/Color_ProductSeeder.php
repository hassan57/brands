<?php

use Illuminate\Database\Seeder;
use App\Color_Product;

class Color_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color_Product::create([
            'color_id'    => 1,
            'product_id' => 1
        ]);

        Color_Product::create([
            'color_id'    => 2,
            'product_id' => 1
        ]);

        Color_Product::create([
            'color_id'    => 3,
            'product_id' => 1
        ]);

        Color_Product::create([
            'color_id'    => 4,
            'product_id' => 1
        ]);

        Color_Product::create([
            'color_id'    => 5,
            'product_id' => 1
        ]);

        Color_Product::create([
            'color_id'    => 2,
            'product_id' => 2
        ]);

        Color_Product::create([
            'color_id'    => 3,
            'product_id' => 2
        ]);

        Color_Product::create([
            'color_id'    => 4,
            'product_id' => 2
        ]);

        Color_Product::create([
            'color_id'    => 5,
            'product_id' => 2
        ]);

        Color_Product::create([
            'color_id'    => 6,
            'product_id' => 2
        ]);

        Color_Product::create([
            'color_id'    => 1,
            'product_id' => 3
        ]);

        Color_Product::create([
            'color_id'    => 2,
            'product_id' => 3
        ]);

        Color_Product::create([
            'color_id'    => 3,
            'product_id' => 3
        ]);

        Color_Product::create([
            'color_id'    => 4,
            'product_id' => 3
        ]);

        Color_Product::create([
            'color_id'    => 5,
            'product_id' => 3
        ]);
        Color_Product::create([
            'color_id'    => 1,
            'product_id' => 4
        ]);

        Color_Product::create([
            'color_id'    => 2,
            'product_id' => 4
        ]);

        Color_Product::create([
            'color_id'    => 3,
            'product_id' => 4
        ]);

        Color_Product::create([
            'color_id'    => 4,
            'product_id' => 4
        ]);

        Color_Product::create([
            'color_id'    => 5,
            'product_id' => 4
        ]);

        Color_Product::create([
            'color_id'    => 6,
            'product_id' => 4
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\OrderItem;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderItem::create([
            'order_id' => 1,
            'product_id' => 1,
            'quainty' => 2,
            'product_color' => 'black',
            'product_size' => 'XL',
            'price' => 300,
        ]);

        OrderItem::create([
            'order_id' => 1,
            'product_id' => 2,
            'quainty' => 3,
            'product_color' => 'red',
            'product_size' => 'L',
            'price' => 200,
        ]);

        OrderItem::create([
            'order_id' => 2,
            'product_id' => 2,
            'quainty' => 1,
            'product_color' => 'blue',
            'product_size' => 'M',
            'price' => 233,
        ]);

        OrderItem::create([
            'order_id' => 3,
            'product_id' => 3,
            'quainty' => 1,
            'product_color' => 'yellow',
            'product_size' => 'L',
            'price' => 100,
        ]);
        OrderItem::create([
            'order_id' => 3,
            'product_id' => 2,
            'quainty' => 2,
            'product_color' => 'gray',
            'product_size' => 'XL',
            'price' => 110,
        ]);
        OrderItem::create([
            'order_id' => 3,
            'product_id' => 4,
            'quainty' => 2,
            'product_color' => 'black',
            'product_size' => 'L',
            'price' => 123,
        ]);
        OrderItem::create([
            'order_id' => 3,
            'product_id' => 1,
            'quainty' => 2,
            'product_color' => 'brown',
            'product_size' => 'S',
            'price' => 120,
        ]);
    }
}

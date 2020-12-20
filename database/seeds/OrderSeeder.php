<?php

use Illuminate\Database\Seeder;
use App\Order;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'user_id' => 1,
            'status' => 1,
            'billing_id' => 1
        ]);

        Order::create([
            'user_id' => 2,
            'status' => 1,
            'billing_id' => 2
        ]);

        Order::create([
            'user_id' => 3,
            'status' => 1,
            'billing_id' => 3
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminUserSeeder::class);
        $this->call(categorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(Size_ProductSeeder::class);
        $this->call(Color_ProductSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(BillingSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderItemSeeder::class);
    }
}

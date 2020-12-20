<?php

use App\Category;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Men Clothes',
            'description' => 'Lorem ipsum dolor sit amet ',
        ]);

        Category::create([
            'name' => 'Woman Clothes',
            'description' => 'Lorem ipsum dolor sit amet ',
        ]);
    }
}

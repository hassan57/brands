<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'name' => 'red',
            'color' => 'red'
        ]);

        Color::create([
            'name' => 'green',
            'color' => 'green'
        ]);

        Color::create([
            'name' => 'blue',
            'color' => 'blue'
        ]);

        Color::create([
            'name' => 'yellow',
            'color' => 'yellow'
        ]);

        Color::create([
            'name' => 'black',
            'color' => 'black'
        ]);

        Color::create([
            'name' => 'white',
            'color' => 'white'
        ]);

        Color::create([
            'name' => 'brown',
            'color' => 'brown'
        ]);
    }
}

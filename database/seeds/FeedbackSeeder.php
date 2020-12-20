<?php

use App\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::create([
            'name'  => 'Hassan Muhamed',
            'email'  => 'hassan@email.com',
            'message'  => 'This Is Best Website For Online Branding ',
        ]);
        Feedback::create([
            'name'  => 'Ehab Elsese',
            'email'  => 'ehab@email.com',
            'message'  => 'Amazing!!! Best Shipping',
        ]);
        Feedback::create([
            'name'  => 'Hamid Balabel',
            'email'  => 'hamid@email.com',
            'message'  => 'Nice Web Site And Faster',
        ]);
    }
}

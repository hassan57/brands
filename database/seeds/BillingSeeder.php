<?php

use App\Billing;
use Illuminate\Database\Seeder;

class BillingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Billing::create([
            'name'     => 'Hassan Mohamed',
            'email'     => 'hm5342590@gmail.com',
            'address'     => 'qaluyb Tree St',
            'city'     => 'َQalyub',
            'province'     => 'Qaluibya',
            'postal'     => '12452',
            'phone'     => '01005164154',
            'user_id'     => 1,
        ]);
        Billing::create([
            'name'     => 'Eahab Mohamed',
            'email'     => 'ehab@gmail.com',
            'address'     => 'qaluyb Tree St',
            'city'     => 'َQalyub',
            'province'     => 'Qaluibya',
            'postal'     => '12452',
            'phone'     => '01005164154',
            'user_id'     => 2,
        ]);
        Billing::create([
            'name'     => 'Ahmed Mohamed',
            'email'     => 'ahmed@gmail.com',
            'address'     => 'qaluyb Tree St',
            'city'     => 'َQalyub',
            'province'     => 'Qaluibya',
            'postal'     => '12452',
            'phone'     => '01005164154',
            'user_id'     => 3,
        ]);
    }
}

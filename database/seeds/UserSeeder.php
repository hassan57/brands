<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'hassan21',
            'email' => 'hassan@gmail.com',
            'password' => bcrypt(123456),
            'first_name' => 'Hassan',
            'last_name' => 'Elhawary',
            'birth_date' => '2019-08-30 17:47:30',
            'image' => 'hassan.jpg',
            'status' => 1,
        ]);
        User::create([
            'username' => 'ahmed3',
            'email' => 'ahmed@gmail.com',
            'password' => bcrypt(123456),
            'first_name' => 'Ahmed',
            'last_name' => 'Elhawary',
            'birth_date' => '2019-08-31 17:47:30',
            'image' => 'hassan.jpg',
            'status' => 1,
        ]);
        User::create([
            'username' => 'mohamed25',
            'email' => 'mohamde@gmail.com',
            'password' => bcrypt(123456),
            'first_name' => 'Mohamed',
            'last_name' => 'Elhawary',
            'birth_date' => '2019-09-1 17:47:30',
            'image' => 'hassan.jpg',
            'status' => 1,
        ]);
    }
}

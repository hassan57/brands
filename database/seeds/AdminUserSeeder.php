<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AdminUser::create([
            'name'     => 'Hassan Elhawary',
            'email'    => 'hassan@gmail.com',
            'password' =>  bcrypt(123456),
        ]);
    }
}

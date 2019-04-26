<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Xavier',
            'email' => '28xeric@gmail.com',
            'password' => bcrypt('64289731'),
            'admin' => true
        ]);
    }
}

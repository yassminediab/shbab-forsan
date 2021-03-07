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
            'email' => 'admin@shbab.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
            'name' => 'admin'
        ]);
    }
}

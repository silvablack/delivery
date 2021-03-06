<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate users table
        User::truncate();
        
        //create user
        User::create([
            'name' => 'Paulo Silva',
            'email' => 'paulosilvadev3@gmail.com',
            'password' => Hash::make('Paulo@123')
        ]);
    }
}

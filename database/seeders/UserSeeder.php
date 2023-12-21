<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => "admin",
                'email' => "admindua@gmail.com",
                'password' => Hash::make('admin1234'),
                'isAdmin' => 1,
            ]
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}

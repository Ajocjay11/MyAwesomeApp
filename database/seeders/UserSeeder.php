<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Ajoc Enrique Gil',
                'email' => 'ajoc@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('ajoc123')
            ],
            [
                'name' => 'James Lebbron',
                'email' => 'james@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('james123')
            ],
            [
                'name' => 'Justin John',
                'email' => 'justin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('justin123')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
            [
                "name" => "Mbiada",
                "email" => "ypam@gmail.com",
                "password" => "1324",
            ]
            ];
     
        User::insert($user);
    }
}

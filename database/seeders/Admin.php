<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "Admin",
            "email"=> "admin@gmail.com",
            'email_verified_at' => now(),
            "password"=> bcrypt("1234"),
            "is_admin" => 1,
            ]);
    }
}

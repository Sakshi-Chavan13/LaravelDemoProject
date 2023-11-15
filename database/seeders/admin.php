<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>'12345678',
            'remember_token'=> str::random(10),
            'is_admin'=> 1
        ]);
    }
}

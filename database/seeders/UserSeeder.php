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
     */
    public function run(): void
    {
        //

        User::create([
            'name'=>"achraf",
            'email'=>"achraf@gmail.com",
            'password'=>Hash::make("achraf@gmail.com"),
            'phone'=>"0689226137",
            'role'=>"organizer",
        ]);
    
    }
}

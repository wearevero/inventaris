<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@vero.com',
            'password' => 'admin123'
        ]);
    }
}

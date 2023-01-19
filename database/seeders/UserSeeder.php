<?php

namespace Database\Seeders;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Inventaris',
            'email' => 'admin@veonique.com',
            'password' => bcrypt('admin123'),
            'remember_token' => null,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);
    }
}

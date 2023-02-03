<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    public function run()
    {
        DB::table('team')->insert([
            [
                'name' => 'Krido Pambudi',
                'username' => '@yuxxeun',
                'bio' => 'We Make Cool Shit That Performs.'
            ],
        ]);
    }
}

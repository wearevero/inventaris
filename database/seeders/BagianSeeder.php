<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BagianSeeder extends Seeder
{

    public function run()
    {
        DB::table('bagian')->insert([
            [
                'nama' => 'OFFICE',
                'slug' => 'office',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'BOM',
                'slug' => 'bom',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'WAX',
                'slug' => 'wax',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'PPIC',
                'slug' => 'ppic',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'SEGONG',
                'slug' => 'segong',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'CAD ROOM',
                'slug' => 'cad-room',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]
        ]);
    }
}

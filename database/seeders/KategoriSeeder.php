<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{

    public function run()
    {
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'Monitor',
                'kode_kategori' => 'MNT',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama_kategori' => 'Notebook',
                'kode_kategori' => 'NB',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama_kategori' => 'CCTV',
                'kode_kategori' => 'CCTV',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
        ]);      
    }
}

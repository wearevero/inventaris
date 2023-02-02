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
                'kode_kategori' => 'MT',
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
                'nama_kategori' => 'CAMERA',
                'kode_kategori' => 'CM',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama_kategori' => 'CPU',
                'kode_kategori' => 'PCU',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama_kategori' => 'PSU',
                'kode_kategori' => 'PSU',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama_kategori' => 'PRINTER',
                'kode_kategori' => 'PR',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama_kategori' => 'OTHERS',
                'kode_kategori' => 'ETC',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
        ]);      
    }
}

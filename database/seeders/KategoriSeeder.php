<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{

    public function run()
    {
        DB::table('kategori')->insert([
            [
                'nama' => 'Monitor',
                'kode' => 'MT',
                'slug' => 'monitor',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'Notebook',
                'kode' => 'NB',
                'slug' => 'notebook',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'CAMERA',
                'kode' => 'CM',
                'slug' => 'camera',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'CPU',
                'kode' => 'CPU',
                'slug' => 'cpu',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'PSU',
                'kode' => 'PSU',
                'slug' => 'psu',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'PRINTER',
                'kode' => 'PR',
                'slug' => 'printer',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'nama' => 'OTHERS',
                'kode' => 'ETC',
                'slug' => 'others',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
        ]);      
    }
}

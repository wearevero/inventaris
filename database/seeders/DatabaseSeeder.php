<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bagian;
use App\Models\Inventaris;
use App\Models\Kategori;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BagianSeeder::class,
            KategoriSeeder::class,
            StatusSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BagianSeeder extends Seeder
{
    public function run()
    {
        DB::table("bagian")->insert([
            [
                "nama" => "OFFICE",
                "slug" => "office",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "SECURITY",
                "slug" => "security",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "SETTING",
                "slug" => "setting",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "QC BD 1",
                "slug" => "qc-bd-1",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "QC BD 2",
                "slug" => "qc-bd-2",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "SEGONG BD 1",
                "slug" => "segong-bd-1",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "GUDANG",
                "slug" => "gudang",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "STONE",
                "slug" => "stone",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "SEGONG BD 2",
                "slug" => "segong-bd-2",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "PPIC BD 2",
                "slug" => "ppic-bd-2",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "POLISHING BD 2",
                "slug" => "polishing-bd-2",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "QC BD 2",
                "slug" => "qc-bd-2",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "CULAP BD 2",
                "slug" => "culap-bd-2",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "DIAMOND",
                "slug" => "diamond",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "YONMA",
                "slug" => "yonma",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "WAX",
                "slug" => "wax",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "MOULDING",
                "slug" => "moulding",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "CAD",
                "slug" => "cad",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "MASTER SAMPLE",
                "slug" => "master-sample",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "DOGUM",
                "slug" => "dogum",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "JUJO",
                "slug" => "jujo",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "POLISHING BD 1",
                "slug" => "polishing-bd-1",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "PPC BD 3",
                "slug" => "ppc-bd-3",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "MAINTENANCE",
                "slug" => "maintenance",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "FILLING BD 1",
                "slug" => "filling-bd-1",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "nama" => "OTHER",
                "slug" => "other",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
        ]);
    }
}

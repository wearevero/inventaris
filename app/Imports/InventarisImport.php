<?php

namespace App\Imports;

use App\Models\Inventaris;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InventarisImport implements ToModel
{
    public function model(array $row)
    {
        return new Inventaris([
            'nama_user' => $row[1],
            'nama_bagian' => $row[2],
            'th_pembelian' => $row[3],
            'kode' => $row[4],
            'ram' => $row[5],
            'cpu' => $row[6],
            'merk' => $row[7],
            'keterangan' => $row[8]
        ]);
    }
}

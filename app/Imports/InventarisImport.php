<?php

namespace App\Imports;
use App\Models\Inventaris;
use Maatwebsite\Excel\Concerns\ToModel;

class InventarisImport implements ToModel
{
    public function model(array $row)
    {
        return new Inventaris([
            'nama_user' => $row[1],
            'bagian_id' => $row[2],
            'kategori_id' => $row[3],
            'kode' => $row[4],
            'th_pembelian' => $row[5],
            'memory' => $row[6],
            'cpu' => $row[7],
            'merk' => $row[8],
            'posisi' => $row[9],
            'size_monitor' => $row[10],
            'status_id' => $row[11],
            'keterangan' => $row[12]
        ]);
    }
}

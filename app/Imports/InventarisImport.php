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
            'th_pembelian' => $row[3],
            'memory' => $row[4],
            'cpu' => $row[5],
            'kode' => $row[6],
            'merk' => $row[7],
            'keterangan' => $row[8],
            'posisi' => $row[9],
            'size_monitor' => $row[10],
            'kategori_id' => $row[11],
            'status_id' => $row[12],
        ]);
    }
}

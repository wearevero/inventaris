<?php

namespace App\Exports;

use App\Models\Inventaris;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InventarisExport implements FromCollection, WithHeadings
{

    public function collection()
    {
        return Inventaris::select('id', 'nama_user', 'nama_bagian', 'th_pembelian', 'kode', 'memory', 'cpu', 'merk', 'keterangan')->get();
    }

    public function headings(): array
    {
        return ["ID", "Nama User", "Nama Bagian", "Tahun Pembelian", "Kode", "Memory", "CPU", "Merk", "Keterangan"];
    }
}

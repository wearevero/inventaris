<?php

namespace App\Exports;

use App\Models\Inventaris;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InventarisExport implements FromCollection, WithHeadings
{

    public function collection()
    {
        return Inventaris::select('id', 'nama_user', 'bagian_id', 'th_pembelian', 'kode', 'memory', 'cpu', 'merk', 'keterangan', 'posisi', 'size_monitor', 'kategori_id')->get();
    }

    public function headings(): array
    {
        return ["ID", "Nama User", "Bagian ID", "Tahun Pembelian", "Kode", "Memory", "CPU", "Merk", "Keterangan", "Posisi", "Size Monitor", "Kategori ID"];
    }
}

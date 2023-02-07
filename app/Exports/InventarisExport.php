<?php

namespace App\Exports;

use App\Models\Inventaris;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InventarisExport implements FromCollection, WithHeadings
{

    public function collection()
    {
        return Inventaris::select('nama_user', 'bagian_id', 'kategori_id','kode', 'th_pembelian', 'memory', 'cpu', 'merk', 'posisi', 'size_monitor', 'status_id', 'keterangan')->get();
    }

    public function headings(): array
    {
        return ["Nama User", "Bagian ID", "Kategori ID", "Kode", "Th. Pembelian", "Memory", "CPU", "Merk", "Posisi", "Size Monitor", "Status ID", "Keterangan"];
    }
}

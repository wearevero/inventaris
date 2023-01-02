<?php

namespace App\Exports;

use App\Models\Inventaris;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\WithHeadings;

class InventarisExport implements FromCollection
{

    public function collection()
    {
        return Inventaris::select('id', 'nama_user', 'nama_bagian', 'th_pembelian', 'kode', 'ram', 'cpu', 'merk')->get();
    }

    public function headings(): array
    {
        return ["ID", "Nama User", "Nama Bagian", "Nama Bagian", "Tahun Pembelian", "Kode", "RAM", "CPU", "Merk"];
    }
}

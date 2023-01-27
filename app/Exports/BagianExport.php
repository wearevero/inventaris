<?php

namespace App\Exports;

use App\Models\Bagian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BagianExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Bagian::select('id_bagian', 'nama_bagian')->get();
    }

    public function headings(): array
    {
        return ['ID', "Nama Bagian"];
    }
}

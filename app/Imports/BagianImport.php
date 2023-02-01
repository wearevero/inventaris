<?php

namespace App\Imports;

use App\Models\Bagian;
use Maatwebsite\Excel\Concerns\ToModel;

class BagianImport implements ToModel
{

    public function model(array $row)
    {
        return new Bagian([
            'nama_bagian' => $row[1],
        ]);
    }
}

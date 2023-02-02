<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_user',
        'id_bagian',
        'th_pembelian',
        'kode',
        'memory',
        'cpu',
        'merk',
        'keterangan',
        'posisi',
        'size_monitor',
        'kategori'
    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class, 'id_bagian', 'id_bagian');
    }

}

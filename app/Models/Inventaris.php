<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_user',
        'bagian_id',
        'th_pembelian',
        'kode',
        'memory',
        'cpu',
        'merk',
        'keterangan',
        'posisi',
        'size_monitor',
        'kategori_id'
    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

}

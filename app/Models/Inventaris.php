<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $rules = [
        'status' => 'boolean'
    ];

    protected $fillable = [
        'nama_user',
        'bagian_id',
        'kategori_id',
        'kode',
        'th_pembelian',
        'memory',
        'cpu',
        'merk',
        'posisi',
        'size_monitor',
        'status_id',
        'keterangan'
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

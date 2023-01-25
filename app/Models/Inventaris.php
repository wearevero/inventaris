<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Inventaris extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_user',
        'nama_bagian',
        'th_pembelian',
        'kode',
        'ram',
        'cpu',
        'merk',
        'keterangan'
    ];
}

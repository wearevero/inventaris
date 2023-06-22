<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Inventaris extends Model
{
    use HasFactory;
    use Searchable;

    public function toSearchableArray()
    {
        return [
            'nama_user' => $this->nama_user,
            'kode' => $this->kode,
        ];
    }

    protected $fillable = [
        'nama_user',
        'bagian_id',
        'th_pembelian',
        'memory',
        'spec',
        'kode',
        'merk',
        'keterangan',
        'posisi',
        'size_monitor',
        'kategori_id',
        'status_id'
    ];

    protected $rules = [
        "status" => "boolean",
    ];

    protected $guarded = ["id"];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $guarded = ['id'];

    public function inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}

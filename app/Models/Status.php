<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';

    protected $guard = ['id'];

    public function inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    use HasFactory;

    protected $table = 'bagian';
    protected $guarded = ['id'];
    public function inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }
}

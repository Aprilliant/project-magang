<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nasabah extends Model
{
    use HasFactory;
    protected $table = 'nasabah';
    protected $guarded = [];

    public function penugasan()
    {
        return $this->hasMany(Penugasan::class, 'nama_nasabah_id');
    }
}

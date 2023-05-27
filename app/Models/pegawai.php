<?php

namespace App\Models;

use App\Models\Penugasan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $guarded = [];

    // Pegawai mempunyai banyak laporan
    // public function penugasan()
    // {
    //     return $this->hasMany(Penugasan::class, 'pegawai_id');
    // }
}

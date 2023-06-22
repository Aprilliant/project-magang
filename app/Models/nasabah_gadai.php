<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nasabah_gadai extends Model
{
    use HasFactory;
    protected $table = 'nasabah-gadai';
    protected $guarded = [];
    protected $fillable = [
        'nama_nasabah',
        'alamat',
        'nomer_hp',
        'tanggal_lahir',
    ];
}

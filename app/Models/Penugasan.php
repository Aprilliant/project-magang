<?php

namespace App\Models;

use App\Models\nasabah;

use App\Models\data_nasabah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Penugasan extends Model
{
    use HasFactory;
    protected $table = 'penugasan';
    protected $guarded = [];


    // public function pegawai()
    // {
    //     return $this->belongsTo(pegawai::class, 'pegawai_id');
    // }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function data_nasabah()
    // {
    //     return $this->belongsTo(data_nasabah::class, 'nama_nasabah_id');
    // }

    public function nasabah()
    {
        return $this->belongsTo(nasabah::class, 'nama_nasabah_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $guarded = [];
    protected $fillable = [
        'nomer_kredit',
        'tanggal_kunjungan',
        'kondisi_nasabah',
        'kondisi_barang_jaminan',
        'tanggal_janji_bayar',
        'hasil_kunjungan',
        'nominal_membayar',
        'bukti_membayar',
        'foto_kunjungan',
        'laporan',
        'longitude',
        'latitude',
    ];

    // Laporan dimiliki oleh satu pegawai
    public function pegawai()
    {
        return $this->belongsTo(pegawai::class);
    }
}

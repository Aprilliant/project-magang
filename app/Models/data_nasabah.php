<?php

namespace App\Models;

use App\Models\Penugasan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class data_nasabah extends Model
{
    use HasFactory;
    protected $table = 'data_nasabah';
    protected $guarded = [];
    // protected $fillable = [
    //     'nama',
    //     'alamat',
    //     'no_kredit',
    //     'no_hp',
    //     'hari_tunggakan',
    //     'osl',
    //     'angsuran',
    //     'kewajiban',
    // ];

    // Data nasabah mempunyai banyak penugasan
    // public function penugasan()
    // {
    //     return $this->hasMany(Penugasan::class, 'nama_nasabah_id');
    // }
}

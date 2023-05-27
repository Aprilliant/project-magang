<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penugasan;

class nasabah extends Model
{
    use HasFactory;
    protected $table = 'nasabah';
    protected $guarded = [];

    public function penugasan()
    {
        return $this->hasMany(penugasan::class, 'nama_nasabah_id');
    }
}

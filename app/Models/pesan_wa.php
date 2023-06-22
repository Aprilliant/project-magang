<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan_wa extends Model
{
    use HasFactory;
    protected $table = 'pesan_wa';
    protected $fillable = [
        'isi_pesan',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananTiket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'jumlah_tiket',
    ];
}

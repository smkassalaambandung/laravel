<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// buku
class Book extends Model
{
    use HasFactory;

    // protected $table = 'buku';
    protected $fillable = [
        'nama_buku',
        'jumlah_halaman',
        'translate_judul_buku'
    ];
}

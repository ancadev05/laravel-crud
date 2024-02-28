<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laptop extends Model
{
    use HasFactory;

    //Kolom yang boleh diisi pada tabel laptop
    protected $fillable = ['kode_barang', 'merek', 'tipe', 'jumlah', 'ket'];

    // Tabel yang akan diisi
    protected $table = 'laptop';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk memaksa nama tabel yang benar
    protected $table = 'peminjamans'; 

    protected $fillable = [
        'nama_barang',
        'nama_peminjam',
        'tgl_pinjam',
        'status'
    ];
}
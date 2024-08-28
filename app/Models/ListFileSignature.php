<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListFileSignature extends Model
{
    use HasFactory;

    // Jika nama tabel di database berbeda dari konvensi Laravel, tentukan nama tabel secara eksplisit
    protected $table = 'LIST_FILE_SIGNATURE';

    // Jika tabel tidak menggunakan timestamps (created_at dan updated_at)
    public $timestamps = false;

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['kategori', 'nama_file', 'gambar_file'];
}

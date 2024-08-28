<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    // Jika nama tabel tidak sesuai dengan konvensi Laravel (plural dari nama model)
    protected $table = 'signature';

    // Jika nama kolom primary key bukan 'id'
    protected $primaryKey = 'your_primary_key_column';

    // Jika primary key bukan auto-increment
    public $incrementing = false;

    // Jika primary key bukan integer
    protected $keyType = 'string';

    // Jika tabel tidak menggunakan timestamp
    public $timestamps = false;

    // Kolom yang diisi secara massal
    protected $fillable = [
        'branch',
        'no_rekening',
        'nama_rekening',
    ];
}


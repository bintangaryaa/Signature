<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataReport extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai konvensi penamaan Laravel
    protected $table = 'data_reports';

    // Tentukan kolom-kolom yang bisa diisi
    protected $fillable = [
        'branch', 'location', 'total_accounts', 
        'unclassified_data', 'classified_data', 
        'unapproved_data', 'approved_data', 'rejected_data'
    ];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListFileSignature;

class TabelController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel LIST_FILE_SIGNATURE
        $listFileSignatures = ListFileSignature::all();
        return view('tabel', compact('listFileSignatures')); // Kirim data ke view
    }
}

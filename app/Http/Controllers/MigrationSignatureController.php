<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signature; // Import model jika perlu

class MigrationsignatureController extends Controller
{
    public function index(Request $request)
    {
        $results = collect(); // Menggunakan koleksi kosong sebagai default

        if ($request->isMethod('post')) {
            $request->validate([
                'branch' => 'nullable|string',
                'noRekening' => 'nullable|string',
                'namaRekening' => 'nullable|string',
            ]);

            $branch = $request->input('branch');
            $noRekening = $request->input('noRekening');
            $namaRekening = $request->input('namaRekening');

            // Query Eloquent dan mengembalikan koleksi
            $results = Signature::query()
                ->where('branch', 'LIKE', "%{$branch}%")
                ->where('no_rekening', 'LIKE', "%{$noRekening}%")
                ->where('nama_rekening', 'LIKE', "%{$namaRekening}%")
                ->get();
        }

        return view('migrationsignature', ['results' => $results]);
    }
}

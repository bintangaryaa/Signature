<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signature;

class SignatureController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'branch' => 'nullable|string',
            'noRekening' => 'nullable|string',
            'namaRekening' => 'nullable|string',
        ]);

        $branch = $request->input('branch');
        $noRekening = $request->input('noRekening');
        $namaRekening = $request->input('namaRekening');

        // Query ke database
        $results = Signature::query()
            ->where('branch', 'LIKE', "%{$branch}%")
            ->where('no_rekening', 'LIKE', "%{$noRekening}%")
            ->where('nama_rekening', 'LIKE', "%{$namaRekening}%")
            ->get();

        return view('migrationsignature', ['results' => $results]);
    }
}

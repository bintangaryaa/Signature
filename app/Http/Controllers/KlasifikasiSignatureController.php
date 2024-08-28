<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlasifikasiSignatureController extends Controller
{
    public function index()
    {
        return view('migrationsignature');
    }
}

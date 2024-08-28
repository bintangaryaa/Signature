{{-- resources/views/report/subitem2.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-5">Laporan Subitem 2</h1>
    <p>Ini adalah halaman untuk Subitem 2 di laporan admin.</p>
    
    <!-- Contoh tabel data untuk Subitem 2 -->
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Contoh Data A</td>
                <td>Deskripsi untuk data A</td>
                <td>2024-08-08</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Contoh Data B</td>
                <td>Deskripsi untuk data B</td>
                <td>2024-08-09</td>
            </tr>
            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</div>
@endsection

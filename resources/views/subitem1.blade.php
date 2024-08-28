{{-- resources/views/report/subitem1.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-5">Laporan Subitem 1</h1>
    <p>Ini adalah halaman untuk Subitem 1 di laporan admin.</p>
    
    <!-- Contoh tabel data untuk Subitem 1 -->
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
                <td>Contoh Data 1</td>
                <td>Deskripsi untuk data 1</td>
                <td>2024-08-08</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Contoh Data 2</td>
                <td>Deskripsi untuk data 2</td>
                <td>2024-08-09</td>
            </tr>
            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</div>
@endsection

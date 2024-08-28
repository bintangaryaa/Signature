<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Migration Signature</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: row;
            height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background-color: #00a03e;
            z-index: 1030;
        }

        a:hover {
            color: white;
        }

        .navbar-brand {
            color: white;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .navbar-nav {
            flex-direction: row;
        }

        .navbar-nav .nav-item {
            margin-left: 1rem;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding: 10px;
            height: 100vh;
            position: fixed;
            top: 56px; /* Adjust for navbar height */
            left: 0;
            overflow-y: auto;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .sidebar .nav-item {
            margin: 10px 0;
        }

        .content {
            margin-left: 250px; /* Same as sidebar width */
            margin-top: 56px; /* Same as navbar height */
            padding: 20px;
            background-color: #f8f9fa;
            flex-grow: 1;
        }

        .footer {
            background-color: #00a03e;
            color: white;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: calc(100% - 250px);
            margin-left: 250px; /* Same as sidebar width */
            text-align: center;
        }

        .footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer .left {
            text-align: left;
        }

        .footer .right {
            text-align: right;
        }

        /* CSS untuk tabel */
        #tableview {
            display: none; /* Tabel disembunyikan secara default */
            margin: 20px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">BUKIWEB (Bukopin Information Web)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Help <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="sidebar">
        <h4>Menu</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/home">HOME</a>
            </li>   
            <li class="nav-item">
                <a class="nav-link" href="{{ route('migrationsignature') }}">KLASIFIKASI SIGNATURE</a>
            </li>     
            <li class="nav-item">
                <a class="nav-link" href="{{ route('report') }}">REPORT ADMIN</a>
                <ul class="nav flex-column ml-3">
                </ul>
            </li>
        </ul>
    </div>

    <div class="content">
        <h3>Migration Signature</h3>
        <form id="searchForm" action="{{ route('search') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="branch">Branch</label>
                <input type="text" class="form-control col-md-4" name="branch" id="branch">
            </div>
            <div class="form-group">
                <label for="noRekening">No. Rekening</label>
                <input type="text" class="form-control col-md-4" name="noRekening" id="noRekening">
            </div>
            <div class="form-group">
                <label for="namaRekening">Nama Rekening</label>
                <input type="text" class="form-control col-md-4" name="namaRekening" id="namaRekening">
            </div>
            <button type="button" id="searchButton" class="btn btn-primary">Search</button>
        </form>        
        
        <table class="table table-striped" id="tableview">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama File</th>
                    <th scope="col">Gambar File</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listFileSignatures as $signature)
                <tr>
                    <td>
                        <select class="form-control">
                            @foreach ($listFileSignatures as $option)
                                <option value="{{ $option->kategori }}" {{ $option->kategori == $signature->kategori ? 'selected' : '' }}>
                                    {{ $option->kategori }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="form-control">
                            @foreach ($listFileSignatures as $option)
                                <option value="{{ $option->nama_file }}" {{ $option->nama_file == $signature->nama_file ? 'selected' : '' }}>
                                    {{ $option->nama_file }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="form-control">
                            @foreach ($listFileSignatures as $option)
                                <option value="{{ $option->gambar_file }}" {{ $option->gambar_file == $signature->gambar_file ? 'selected' : '' }}>
                                    {{ $option->gambar_file }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="footer text-center py-3">
        <div class="container">
            <div class="left">
                © 2024 PT. Bank Bukopin, Tbk. All rights reserved.
            </div>
            <div class="right">
                Divisi Pengembangan Teknologi Informasi (DPTI)
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        $(document).ready(function() {
            $('#searchButton').click(function() {
                // Menampilkan tabel setelah pencarian
                $('#tableview').show();
            });
        });
    </script>
</body>

</html>

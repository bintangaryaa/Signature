<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Admin Signature</title>
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

        .navbar-brand {
            color: white;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding: 10px;
            height: 100vh;
            position: fixed;
            top: 56px;
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
            margin-left: 250px;
            margin-top: 56px;
            padding: 20px;
            background-color: #f8f9fa;
            flex-grow: 1;
        }

        .navbar-nav {
            flex-direction: row;
        }

        .navbar-nav .nav-item {
            margin-left: 1rem;
        }

        a:hover {
            color:white
        }

        .footer {
            background-color: #00a03e;
            color: white;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: calc(100% - 250px);
            margin-left: 250px; /* Sama dengan lebar sidebar */
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

        .footer {
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="#"> BUKIWEB (Bukopin Information Web)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Help <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Log Out</a>
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
        <h1 class="my-4">Laporan Admin Signature</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Data Belum Terklasifikasi</div>
                    <div class="card-body">
                        <h5 class="card-title">ok</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Data Terklasifikasi</div>
                    <div class="card-body">
                        <h5 class="card-title">ok</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Data Belum Disetujui</div>
                    <div class="card-body">
                        <h5 class="card-title">ok</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Data Sudah Disetujui</div>
                    <div class="card-body">
                        <h5 class="card-title">ok</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-header">Data Ditolak</div>
                    <div class="card-body">
                        <h5 class="card-title">ok</h5>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Cabang</th>
                    <th>Lokasi</th>
                    <th>Total Rekening</th>
                    <th>Data Belum Terklasifikasi</th>
                    <th>Data Terklasifikasi</th>
                    <th>Data Belum Disetujui</th>
                    <th>Data Disetujui</th>
                    <th>Data Ditolak</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>branch</td>
                    <td>location</td>
                    <td>total account</td>
                    <td>unclassified_data</td>
                    <td>classified_data</td>
                    <td>unapproved_data</td>
                    <td>approved_data</td>
                    <td>rejected_data</td>
                    <td>total_accounts</td>
                </tr>
            </tbody>
        </table>
    </div>

     <!-- footer -->
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK3V5ZxF4N37j1K5Rxg6g71aP5XlF+P0p3Y1k8rYlEyRcb" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UOaE9e3gkKtz4/cH/jjturQfC3u4Um3uHnlHjF8CBU/j7V4J0ZRtQ4S7jzX15F3k" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfyyB+7l88PZ0rT6swScQxN2j6DQ5xQK0ePh/tDQf5Mo6f9mU20Mbv8fFfF+r4E" crossorigin="anonymous"></script>
</body>

</html>

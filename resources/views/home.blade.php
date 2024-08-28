<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        body {
            display: flex;
            flex-direction: row;
            height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url('images/bg bank.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background-color:#00a03e; /* Semi-transparent background */
            z-index: 1030;
        }
        
        a:hover {
            color:white;
        }

        .navbar-brand {
            color: white;
            margin-left: 10px;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .navbar-nav {
            margin-left: auto;
            margin-right: 10px;
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
            background-color: rgba(248, 249, 250, 0.8); /* Semi-transparent background */
            flex-grow: 1;
            position: relative; /* To position footer correctly */
            padding-bottom: 60px; /* Add space for footer */
        }

        .title {
            font-family: "Times New Roman", Times, serif;
        }

        .footer {
            background-color:#00a03e; /* Semi-transparent background */
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
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
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

    <!-- Sidebar -->
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
                <ul class="nav flex-column ms-3">
                </ul>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid mt-5">
            <div class="text-center">
                <h1 class="display-4 title">HALAMAN HOME</h1>
                <p class="lead">SELAMAT DATANG DI WEBSITE BUKOPIN INFORMATION WEBSITE (BUKIWEB)</p>
                <a href="/migrationsignature" class="btn btn-primary btn-lg">Get Started</a>
            </div>
        </div>
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

    <!-- Bootstrap JS (optional, for interactive components) -->
   

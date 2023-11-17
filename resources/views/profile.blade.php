<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman | Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/profile') }}">Profile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/form') }}">Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- jumbotron -->
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome <span>To</span> My Profile</h1>
            <img rowspan="5" class="img-circle mx-auto d-block gambar" width="100" height="100" src="img/github.png" alt="my-image">
            <div class="bungkus">
                <table class="tables">
                    <tr>
                        <td>Nama</td>
                        <td>: Muhammad Andika Wardana</td>
                    </tr>
                    <tr>
                        <td>Npm</td>
                        <td>: 2109020100</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: Teknologi Informasi</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>: TI - C1</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>: 30 Oktober 2002</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>: Jln.Mesjid 1</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
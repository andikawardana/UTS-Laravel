<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman | Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/form') }}">Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- table list mahasiswa -->
    <div class="display-mhs">
        <div class="container">
            <h1>Welcome <span>To</span> Mahasiswa List</h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Npm</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Tempat Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ray</td>
                        <td>2109020122</td>
                        <td>Teknologi Informasi</td>
                        <td>C</td>
                        <td>02 Januari 2005</td>
                        <td>Jawa</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Azka</td>
                        <td>2109020101</td>
                        <td>Teknologi Informasi</td>
                        <td>A</td>
                        <td>12 Februari 2003</td>
                        <td>Batam</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Rana</td>
                        <td>2109020115</td>
                        <td>Sistem Informasi</td>
                        <td>B</td>
                        <td>20 Maret 2002</td>
                        <td>Banjar Masin</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
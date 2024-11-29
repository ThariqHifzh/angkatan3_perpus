<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Books</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <style>
    .table-striped tr:nth-child(even) {
        background-color: green;
    }

    .table-striped tr:nth-child(odd) {
        background-color: yellow;
    }

    .custom-button {
        margin-right: 10px;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="text-primary fw-bold navbar-brand" href="#">PerpusPPKD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manage Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manage Books</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Table Section -->
    <div class="container mt-5">
        <h3>Table Buku</h3>
        <div class="mb-3">
            <button class="btn btn-primary custom-button">ADD</button>
            <button class="btn btn-secondary custom-button">RECYCLE</button>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori Buku</th>
                    <th>Lokasi Rak</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Keterangan</th>
                    <th>Stock</th>
                    <th>Settings</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk anak-anak</td>
                    <td>16</td>
                    <td>
                        <button class="btn btn-sm btn-danger">🗑</button>
                        <button class="btn btn-sm btn-warning">✏️</button>
                    </td>
                </tr>
                <!-- Baris kosong tambahan untuk kesesuaian dengan gambar -->
                <tr>
                    <td colspan="10"></td>
                </tr>
                <tr>
                    <td colspan="10"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="fst-italic text-center shadow-sm mt-5 border-top border-black fixed-bottom">
        <div class=" cotainer-xxl">
            <div class="row">
                <p class="text-center pt-3 pe-4">Copyright &copy 2024 PPKD - Jakarta Pusat</p>
            </div>
    </footer>
    </div>
    <script src=" bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
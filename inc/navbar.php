<div>
    <nav class="navbar navbar-expand-lg border-bottom border-dark">
        <div class="container-fluid">
            <img src="./ppkd.png" alt="" style="width: 45px; margin-left: 40px; margin-right: 20px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold" style="font-size: small;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=user">MANAGE ACCOUNT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=kategori">KATEGORI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=buku">BUKU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=level">LEVEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=peminjaman">PEMINJAMAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=anggota">ANGGOTA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=pengembalian">PENGEMBALIAN</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-danger rounded-button"
                            onclick="return confirm('Apakah Anda Yakin untuk Log-Out?')" href="./keluar.php">Log-Out</a>
                    </li>
                </ul>
                <style>
                    .rounded-button {
                        border-radius: 20px;
                    }
                </style>

            </div>
        </div>
    </nav>
</div>
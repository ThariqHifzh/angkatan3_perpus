<?php
$buku = mysqli_query($koneksi, "SELECT kategori.nama_kategori, buku.* FROM buku LEFT JOIN kategori ON kategori.id = buku.id_kategori ORDER BY id DESC");
?>

<div class="mt-5 container">
    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3 fw-bold">Data Buku</legend>
                <div class="button-action mb-3">
                    <a href="?pg=tambah-buku" class=" btn btn-primary custom-button">ADD</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama Buku</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Pengarang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($buku)):
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['nama_kategori'] ?></td>
                                <td><?php echo $row['nama_buku'] ?></td>
                                <td><?php echo $row['penerbit'] ?></td>
                                <td><?php echo $row['tahun_terbit'] ?></td>
                                <td><?php echo $row['pengarang'] ?></td>
                                <td>
                                    <a class="btn btn-success btn-sm"
                                        href="?pg=tambah-buku&edit=<?php echo $row['id'] ?>">Edit</a>

                                    <a class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini??')"
                                        href="?pg=tambah-buku&delete=<?php echo $row['id'] ?>">Delete</a>
                                </td>
                            </tr>
                            </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>
        <div>
        </div>
    </div>
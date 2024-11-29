<?php
$query = mysqli_query($koneksi, "SELECT peminjaman.no_peminjaman, pengembalian.* FROM pengembalian LEFT JOIN peminjaman ON peminjaman.id = pengembalian.id_peminjaman ORDER BY id DESC");
?>

<div class="mt-5 container">
    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3 fw-bold">Data Pengembalian</legend>
                <div class="button-action mb-3">
                    <a href="?pg=tambah-pengembalian" class=" btn btn-primary">ADD</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Peminjaman</th>
                                <th>Status</th>
                                <th>Denda</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($query)):
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['no_peminjaman'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <td><?php echo $row['denda'] ?></td>
                                <td>
                                    <a class="btn btn-success btn-sm"
                                        href="?pg=tambah-pengembalian&detail=<?php echo $row['id'] ?>">Detail</a>
                                    |
                                    <a class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini?')"
                                        href="?pg=tambah-pengembalian&delete=<?php echo $row['id'] ?>">Delete</a>
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
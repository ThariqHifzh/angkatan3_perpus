<?php
$query = mysqli_query($koneksi, "SELECT anggota.nama_anggota, peminjaman.* FROM peminjaman LEFT JOIN anggota ON anggota.id = peminjaman.id_anggota WHERE deleted_at = 0 ORDER BY id DESC");
?>

<div class="mt-5 container">
    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3 fw-bold">Data Peminjaman</legend>
                <div class="button-action mb-3">
                    <a href="?pg=tambah-peminjaman" class=" btn btn-primary custom-button">ADD</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Anggota</th>
                                <th>No Peminjaman</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status</th>
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
                                <td><?php echo $row['nama_anggota'] ?></td>
                                <td><?php echo $row['no_peminjaman'] ?></td>
                                <td><?php echo date('D, d-m-Y', strtotime($row['tgl_peminjaman'])) ?></td>
                                <td><?php echo date('D, d-m-Y', strtotime($row['tgl_pengembalian'])) ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <td>
                                    <a class="btn btn-success btn-sm"
                                        href="?pg=tambah-peminjaman&detail=<?php echo $row['id'] ?>">Detail</a>
                                    |
                                    <a class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini?')"
                                        href="?pg=tambah-peminjaman&delete=<?php echo $row['id'] ?>">Delete</a>
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
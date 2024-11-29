<?php
$level = mysqli_query($koneksi, "SELECT * FROM level ORDER BY id DESC");
?>

<div class="mt-5 container">
    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3 fw-bold">Data Level</legend>
                <div class="button-action mb-3">
                    <a href="?pg=tambah-level" class=" btn btn-primary custom-button">ADD</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($level)):
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['nama_level'] ?></td>
                                <td>
                                    <a class="btn btn-success btn-sm"
                                        href="?pg=tambah-level&edit=<?php echo $row['id'] ?>">Edit</a>

                                    <a class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini??')"
                                        href="?pg=tambah-level&delete=<?php echo $row['id'] ?>">Delete</a>
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
<?php 
$user = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");
?>

<div class="mt-5 container">
    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3 fw-bold">Data User</legend>
                <div class="button-action mb-3">
                    <a href="?pg=tambah-user" class=" btn btn-primary custom-button">ADD</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Telepon</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Jenis Kelamin</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            while($rowUser = mysqli_fetch_assoc($user)):
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $rowUser['telepon'] ?></td>
                                <td><?php echo $rowUser['nama'] ?></td>
                                <td><?php echo $rowUser['email'] ?></td>
                                <td><?php echo $rowUser['jenis_kelamin'] ?></td>
                                <td>
                                    <a class="btn btn-success btn-sm"
                                        href="?pg=tambah-user&edit=<?php echo $rowUser['id'] ?>">Edit</a>

                                    <a class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini??')"
                                        href="?pg=tambah-user&delete=<?php echo $rowUser['id'] ?>">Delete</a>
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
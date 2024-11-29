<?php

if (isset($_POST['tambah'])) {
    $nama_anggota   = $_POST['nama_anggota'];
    $telepon   = $_POST['telepon'];
    $email   = $_POST['email'];
    $alamat  = $_POST['alamat'];
    
    // sql = structur query languages / DML = data manipulation language
    // select, insert, update, delete
    $insert = mysqli_query($koneksi, "INSERT INTO anggota (nama_anggota, telepon, email, alamat) VALUES
    ('$nama_anggota', '$telepon', '$email', '$alamat')");
    header("location:?pg=anggota&tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editAnggota = mysqli_query(
    $koneksi,
    "SELECT * FROM anggota WHERE id = '$id'"
);
$rowEdit = mysqli_fetch_assoc($editAnggota);

if (isset($_POST['edit'])) {
    $nama_anggota  = $_POST['nama_anggota'];
    $telepon   = $_POST['telepon'];
    $email   = $_POST['email'];
    $alamat  = $_POST['alamat'];

    // ubah user kolom apa yang mau di ubah (SET), yang mau di ubah id ke berapa
    $update = mysqli_query($koneksi, "UPDATE anggota SET nama_anggota='$nama_anggota', telepon='$telepon', email='$email', alamat='$alamat' WHERE id='$id'");
    header("location:?pg=anggota&ubah=berhasil");
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi, "DELETE FROM anggota WHERE id='$id'");
    header("location:?pg=anggota");
}

?>

<div class="mt-5 container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3 fw-bold">
                    <?php echo isset($_GET['edit']) ? 'Edit' : 'Add' ?>
                    Member
                </legend>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_anggota" placeholder="Masukan Nama Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_anggota'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Telepon</label>
                        <input type="number" class="form-control" name="telepon" placeholder="Masukan Telepon Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['telepon'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukan Email Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['alamat'] : '' ?>">
                    </div>

                    <div class="button-action mb-3">
                        <button name="<?php echo isset($_GET['edit']) ? 'edit' : 'tambah' ?>"
                            class="btn btn-primary custom-button" type="submit">Submit</button>
                    </div>
                </form>
            </fieldset>
        </div>
        <div>
        </div>
    </div>
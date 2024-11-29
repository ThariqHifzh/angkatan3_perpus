<?php

if (isset($_POST['tambah'])) {
    $nama_level   = $_POST['nama_level'];

    // sql = structur query languages / DML = data manipulation language
    // select, insert, update, delete
    $insert = mysqli_query($koneksi, "INSERT INTO level (nama_level) VALUES
    ('$nama_level')");
    header("location:?pg=level&tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editUser = mysqli_query(
    $koneksi,
    "SELECT * FROM level WHERE id = '$id'"
);
$rowEdit = mysqli_fetch_assoc($editUser);

if (isset($_POST['edit'])) {
    $nama_level  = $_POST['nama_level'];

    // ubah user kolom apa yang mau di ubah (SET), yang mau di ubah id ke berapa
    $update = mysqli_query($koneksi, "UPDATE level SET nama_level='$nama_level' WHERE id='$id'");
    header("location:?pg=level&ubah=berhasil");
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi, "DELETE FROM level WHERE id='$id'");
    header("location:?pg=level&hapus=berhasil");
}

?>

<div class="mt-5 container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3 fw-bold">
                    <?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?>
                    Level
                </legend>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Level</label>
                        <input type="text" class="form-control" name="nama_level" placeholder="Masukan Level"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_level'] : '' ?>">
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
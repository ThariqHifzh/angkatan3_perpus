<?php

if(isset($_POST['tambah'])){
    $nama   = $_POST['nama'];
    $email   = $_POST['email'];
    $password   = $_POST['password'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $telepon   = $_POST['telepon'];

    // sql = structur query languages / DML = data manipulation language
    // select, insert, update, delete
    $insert = mysqli_query($koneksi, "INSERT INTO user (nama, email, password, jenis_kelamin, telepon) VALUES
    ('$nama', '$email', '$password', '$jenis_kelamin', '$telepon')");
    header("location:?pg=user&tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editUser = mysqli_query(
    $koneksi,"SELECT * FROM user WHERE id = '$id'"
);
$rowEdit = mysqli_fetch_assoc($editUser);

if (isset($_POST['edit'])){
    $nama   = $_POST['nama'];
    $email   = $_POST['email'];
    if ($_POST['password']) {
        $password = sha1($_POST['password']);
    } else {
        $password = $rowEdit['password'];
    }
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $telepon   = $_POST['telepon'];
    
    // ubah user kolom apa yang mau di ubah (SET), yang mau di ubah id ke berapa
    $update = mysqli_query($koneksi, "UPDATE user SET nama='$nama',email='$email' ,password='$password' ,jenis_kelamin='$jenis_kelamin'
    ,telepon='$telepon' WHERE id='$id'");
    header("location:?pg=user&ubah=berhasil");
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");
    header("location:?pg=user");
}

?>

<div class="mt-5 container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3 fw-bold">
                    <?php echo isset($_GET['edit']) ? 'Edit' : 'Add' ?>
                    User
                </legend>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['nama'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Telepon</label>
                        <input type="telepon" class="form-control" name="telepon" placeholder="Masukan Telepon Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['telepon'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukan Email Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <br>
                        <input type="radio" id="Laki-laki" name="jenis_kelamin" value="Laki-laki"
                            <?php echo isset($_GET['edit']) ? ($rowEdit['jenis_kelamin'] == 'Laki-laki' ? 'checked' : '') : '' ?>>
                        Laki-laki
                        <input type="radio" id="Perempuan" name="jenis_kelamin" value="Perempuan"
                            <?php echo isset($_GET['edit']) ? ($rowEdit['jenis_kelamin'] == 'Perempuan' ? 'checked' : '') : '' ?>>
                        Perempuan
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
<?php
session_start();
// empty() : kosong
if (empty($_SESSION['NAMA'])) {
    header("location:login.php?access=failed");
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <?php include 'inc/navbar.php'; ?>


        <div class="content">
            <?php
            if (isset($_GET['pg'])) {
                if (file_exists('content/' . $_GET['pg'] . '.php')) {
                    include 'content/' . $_GET['pg'] . '.php';
                }
            } else {
                include 'content/dashboard.php';
            }
            ?>
        </div>

        <footer class="fst-italic text-center shadow-sm mt-5 border-top border-black fixed-bottom">
            <div class=" cotainer-xxl">
                <div class="row">
                    <p class="text-center pt-3 pe-4">Copyright &copy 2024 PPKD - Jakarta Pusat</p>
                </div>
        </footer>
    </div>
    <script src="bootstrap/dist/js/jquery-3.7.1.min.js"></script>
    <script src="bootstrap/dist/js/moment.js"></script>
    <script src=" bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src=" app.js"></script>
    <script>
    $("#id_peminjaman").change(function() {
        let no_peminjaman = $(this).find('option:selected').val();
        let tbody = $('tbody'),
            newRow = "";
        $.ajax({
            url: "ajax/getPeminjam.php?no_peminjaman=" + no_peminjaman,
            type: "get",
            dataType: "json",
            success: function(res) {
                $('#no_pinjam').val(res.data.no_peminjaman);
                $('#tgl_peminjaman').val(res.data.tgl_peminjaman);
                $('#tgl_pengembalian').val(res.data.tgl_pengembalian);
                $('#nama_anggota').val(res.data.nama_anggota);

                let tanggal_kembali = new moment(res.data.tgl_pengembalian);

                let currentDate = new Date().toJSON().slice(0, 10);
                console.log(currentDate);

                let tanggal_di_kembalikan = new moment(currentDate);
                let selisih = tanggal_di_kembalikan.diff(tanggal_kembali, "days");

                let biaya_denda = 5000;
                let totalDenda = selisih * biaya_denda;

                if (totalDenda <= 0) {
                    totalDenda = "0"
                }

                $('#denda').val(totalDenda);

                $.each(res.detail_peminjam, function(key, val) {
                    console.log(val)

                    newRow += "<tr>";
                    newRow += "<td>" + val.nama_buku + "</td>";
                    newRow += "</tr>";
                });

                tbody.html(newRow);
            }
        });
    });
    </script>
</body>

</html>
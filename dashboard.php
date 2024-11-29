<?php
session_start();
session_regenerate_id(true);

// Jika session kosong maka lempar ke login
if (!isset($_SESSION['nama']) && isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>

<body>
    <h1>WELCOME!!!,
        <?=$_SESSION['nama']; ?>
    </h1>
    <a href="../controler/logout.php" class="btn btn-danger btn-sm">Log-out</a>






    <script src="bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
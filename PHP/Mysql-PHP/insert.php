<?php
require "function.php";
if ( isset( $_POST["submit"] ) ) {

    if ( insert( $_POST ) > 0 ) {

        echo "
            <script>
            alert('Data berhasil ditambahkan!');
            document.location.href='index.php';
            </script>
        ";

    } else {
        echo "
            <script>
            alert('Data gagal ditambahkan!');
            document.location.href='index.php';
            </script>
        ";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Data Siswa 2021 PHP & MYSQL with Bootstrap V5</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-info">
<div class="container">
<h1 class="text-center">CRUD Data Siswa</h1>
<h2 class="text-center">PHP & MYSQL dengan Bootstrap</h2>
<div class="row justify-content-center">
<div class="col-3">
<!--AWAL FORM INPUT-->
<div class="card-center mt-4  bg-secondary">
    <div class="card-header bg-primary text-white">
        Form Input Data Siswa
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama" class="form-control" placeholder="Input Produk" required>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Harga" required>
            </div>
            <div class="form-group">
                <label>Kuantitas</label>
                <input type="number" name="kuantitas" class="form-control" placeholder="Jumlah" required>
            </div>
            <button type="submit" class="btn btn-success mt-3" name="submit" >Simpan</button>
            <button type="reset" class="btn btn-danger mt-3" name="reset" >Reset</button>
        </form>
    </div>
    </div>
<!--AKHIR FORM INPUT-->
</div>
</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
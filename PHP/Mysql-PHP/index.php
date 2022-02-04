<?php
include "function.php";
$product = query( "SELECT * FROM products" );
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
<div class="col-9">
<!--AWAL CARD TABEL-->
<div class="card-center mt-4">
    <div class="card-header bg-primary text-white">
        Daftar Siswa
    </div>
    <a href="insert.php" class="btn btn-warning mt-2">Insert Data Siswa</a>
    <div class="card-body">
    <table class="table table-bordered table-dark">
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Kuantitas</th>
            <th>Aksi</th>
        </tr>
<?php $id = 1;foreach ( $product as $products ): ?>
        <tr>
            <td><?=$id++;?></td>
            <td><?=$products["nama"];?></td>
            <td><?=$products["harga"];?></td>
            <td><?=$products["kuantitas"];?></td>
            <td>
            <a href="" class="btn btn-warning mt-2">Update</a>
            <a href="delete.php?id=<?=$products["id"];?>" class="btn btn-danger mt-2" onclick="return confirm ('Yakin ingin menghapus ?')">Delete</a>
            </td>
        </tr>
<?php endforeach;?>
    </table>
    </div>
    </div>
<!--AKHIR CARD TABEL-->
</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
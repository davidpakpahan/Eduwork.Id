<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>CRUD - PHP : Insert Data</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2>Insert Data</h2><hr>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nama">Nama Produk</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Produk">
                </div>
                <div class="form-group">
                    <label for="harga">Harga Produk</label>
                    <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga Produk">
                </div>
                <div class="form-group">
                    <label for="kuantitas">Kuantitas Produk</label>
                    <input type="text" name="kuantitas" id="kuantitas" class="form-control" placeholder="Masukkan Kuantitas Produk">
                </div><br>
                <button type="submit" name="insert" class="btn btn-success">Save</button>
                <a href="index.php" class="btn btn-danger">Cancel</button></a>
            </form>
        </div>
    </div>
</body>
</html>

<?php
include "conn.db.php";

if (isset($_POST['insert']))
{
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kuantitas = $_POST['kuantitas'];

    $query = "INSERT INTO products (`nama`, `harga`, `kuantitas`)
              VALUES ('$nama', '$harga', '$kuantitas')";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "<script>
              alert('Data berhasil ditambahkan');
              document.location = 'index.php';
              </script>";
    } else
    {
        echo "<script> alert('Data gagal ditambahkan'); </script>";
    }
}
?>
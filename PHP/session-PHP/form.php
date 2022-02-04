<?php
session_start();
if ( isset( $_SESSION['error'] ) ) {
    foreach ( $_SESSION['error'] as $error ) {
        echo "<div class='error'><span>" . $error . "</span></div>";
    }
    unset( $_SESSION['error'] );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi</title>
    <style>
    p {
        color: red;
    }
    </style>
</head>
<body>
    <form action="results.php" method="post">
    <tr>
    <td><label for="nama_produk">Nama Produk </label></td>
    <td><input name="nama_produk" placeholder="Nama Produk" type="text" ></td>
    <?php if ( isset( $error_nama ) ) {?>
    <p><?php echo $error_nama ?></p>
    <?php }?>
    </tr><br><br>
    <tr>
    <td><label for="harga_produk">Harga Produk </label></td>
    <td><input name="harga_produk" placeholder="Harga Produk" type="text" ></td>
    <?php if ( isset( $error_harga ) ) {?>
    <p><?php echo $error_harga ?></p>
    <?php }?>
    </tr><br><br>
    <tr>
    <input type="submit" value="Cari">
    </tr>
    </form>

    <?php if ( isset( $nama_produk ) ) {?>
    <h1>Nama Produk : <?php echo $nama_produk ?></h1>
    <?php }?>

    <?php if ( isset( $harga_produk ) ) {?>
    <h1>Harga Produk : <?php echo rupiah( $harga_produk ) ?></h1>
    <?php }?>
</body>
</html>

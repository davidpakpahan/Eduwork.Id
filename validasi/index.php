<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi</title>
</head>
<body>
<form    action="validasi.php"
         method="POST"
   autocomplete="off">

    <input type="text"
           name="nama"
    placeholder="Nama Produk"><br>

    <?php if ( isset( $_SESSION['errors'] ) ): ?>
        <span style="color: red;">
                <?=$_SESSION['errors']['nama'];?>
        </span>
    <?php endif;?><br>

    <input type="text"
           name="harga"
    placeholder="Harga Produk"><br>

    <?php if ( isset( $_SESSION['errors'] ) ): ?>
        <span style="color: red;">
                <?=$_SESSION['errors']['harga'];?>
        </span>
    <?php endif;?><br>

    <input type="text"
           name="kuantitas"
    placeholder="Kuantitas Produk"><br>

    <?php if ( isset( $_SESSION['errors'] ) ): ?>
        <span style="color: red;">
                <?=$_SESSION['errors']['kuantitas'];?>
        </span>
    <?php endif;?><br>

<button    type="submit">KLIK</button>
</form>
</body>
</html>
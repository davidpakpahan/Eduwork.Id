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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>CRUD - PHP : Update Data</title>
</head>
<body>
<?php
include "conn.db.php";
$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id='$id'";
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0)
{
    foreach($query_run as $row)
    {
        ?>
            <div class="container">
                <div class="jumbotron">
                    <h2>Update Data</h2><hr>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" name="nama" id="nama" value="<?php echo $row['nama']?>" class="form-control" placeholder="Masukkan Nama Produk">
                            <?php if ( isset( $_SESSION['errors'] ) ): ?>
                                <span style="color: red;">
                                    <?=$_SESSION['errors']['nama'];?>
                                </span>
                            <?php endif;?><br>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Produk</label>
                            <input type="text" name="harga" id="harga" value="<?php echo $row['harga']?>" class="form-control" placeholder="Masukkan Harga Produk">
                            <?php if ( isset( $_SESSION['errors'] ) ): ?>
                                <span style="color: red;">
                                    <?=$_SESSION['errors']['harga'];?>
                                </span>
                            <?php endif;?><br>
                        </div>
                        <div class="form-group">
                            <label for="kuantitas">Kuantitas Produk</label>
                            <input type="text" name="kuantitas" id="kuantitas" value="<?php echo $row['kuantitas']?>" class="form-control" placeholder="Masukkan Kuantitas Produk">
                            <?php if ( isset( $_SESSION['errors'] ) ): ?>
                                <span style="color: red;">
                                    <?=$_SESSION['errors']['kuantitas'];?>
                                </span>
                            <?php endif;?><br>
                        </div><br>
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                        <a href="index.php" class="btn btn-danger">Cancel</button></a>
                    </form>
                    <?php
                    include "validation.php";
                    ?>
                </div>
            </div>
        <?php
    }
} else
{
    echo "<script> alert('Data tidak ditemukan'); </script>";
}
?>
</body>
</html>
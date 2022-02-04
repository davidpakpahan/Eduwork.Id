<?php
session_start();
session_destroy();
include "bukuController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>MVC - PHP</title>
</head>
<body style="background-color: #20c997;">
    <div class="container p-4">
        <h1 class="text-center">MVC PHP Native / Non OOP</h1>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped"> 
                    <thead class="table-dark text-white">
                        <tr>
                            <th>#</th>
                            <th>Buku</th>
                            <th>Penulis</th>
                            <th>Deskripsi</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                <?php
                    //Tampilkan database di Display
                    $query = "SELECT * FROM products";
                    $query_run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    {   $i = 1;
                        foreach($query_run as $row)
                        {
                            ?>
                                <tbody>
                                    <tr>
                                        <th><?php echo $i++;?></th>
                                        <th><?php echo $row['buku'];?></th>
                                        <th><?php echo $row['penulis'];?></th>
                                        <th><?php echo $row['deskripsi'];?></th>
                                        <th>
                                            <a href="bukuController.php?action=update&id=<?php echo $row['id'];?>" class="btn btn-primary" class="insert">Update</a>
                                        </th>
                                        <th>
                                            <a href="bukuController.php?action=delete&id=<?php echo $row['id'];?>"
                                            onclick="return confirm('Yakin ingin menghapus ?')"
                                            class="btn btn-danger">Delete</a>
                                        </th>
                                    </tr>
                                </tbody>
                            <?php
                        }
                    }
                ?>
            </table>
            </div>
            <div class="col-md-4">
            <form action="bukuController.php?action=insert" method="POST" >
            <div class="form-group">
                <label for="buku">Buku</label>
                <input type="text" id="buku" name="buku" class="form-control" placeholder="Nama Buku" autocomplete="off">
            </div>
            <?php if ( isset( $_SESSION['errors'] ) ): ?>
                <span style="color: red;">
                    <?=$_SESSION['errors']['buku'];?>
                </span>
            <?php endif;?><br>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" id="penulis" name="penulis" class="form-control" placeholder="Nama Penulis" autocomplete="off">
            </div>
            <?php if ( isset( $_SESSION['errors'] ) ): ?>
                <span style="color: red;">
                    <?=$_SESSION['errors']['penulis'];?>
                </span>
            <?php endif;?><br>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" autocomplete="off">
            </div>
            <?php if ( isset( $_SESSION['errors'] ) ): ?>
                <span style="color: red;">
                    <?=$_SESSION['errors']['deskripsi'];?>
                </span>
            <?php endif;?><br>
            <br>
            <a href="bukuController.php?action=insert">
                <button type="submit" class="btn btn-primary">INSERT</button>
            </a>
            <button type="reset" class="btn btn-danger">RESET</button>
        </form>
            </div>
        </div>
    </div>
</body>
</html>
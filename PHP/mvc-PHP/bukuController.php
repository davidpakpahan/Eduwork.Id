<?php
session_start();
include "conn.db.php";

// Insert data ke database
if(isset($_GET['action']))
{
       
    if($_GET['action'] == "insert")
    {    
        $buku       = $_POST['buku'];
        $penulis    = $_POST['penulis'];
        $deskripsi  = $_POST['deskripsi'];
        $errors =[];

    if(empty($buku))
    {
        $errors['buku'] = "Buku tidak boleh kosong!";
    } elseif (!preg_match('/^[a-zA-Z ]*$/', $buku))
    {
        $errors['buku'] = "Nama Buku hanya Huruf dan Spasi saja!";
    }
    
    if(empty($penulis))
    {
        $errors['penulis'] = "Nama Penulistidak boleh kosong!";
    } elseif (!preg_match('/^[a-zA-Z ]*$/', $penulis))
    {
        $errors['penulis'] = "Nama Penulis hanya Huruf dan Spasi saja!";
    }
    
    if(empty($deskripsi))
    {
        $errors['deskripsi'] = "Deskripsi tidak boleh kosong!";
    } elseif (!preg_match('/^[a-zA-Z ]*$/', $deskripsi))
    {
        $errors['deskripsi'] = "Deskripsi hanya Huruf dan Spasi saja!";
    }
    

    
    if(count($errors) > 0)
    {
        $_SESSION['errors'] = $errors;
        header( "Location: index.php" );
        exit();
    } else
    {
        $query      = "INSERT INTO products(`buku`,`penulis`,`deskripsi`)
                                        VALUES('$buku','$penulis','$deskripsi')";
        $query_run  = mysqli_query($conn, $query);
        if($query_run)
        {
            echo "<script>
                        alert ('Data berhasil ditambahkan!');
                        document.location = 'index.php';
                    </script>";
        } else
        {
                echo "<script>
                        alert ('Data gagal ditambahkan!');
                        document.location = 'index.php';
                    </script>";
        }
    }
}
    
    //Update Data
    if($_GET['action'] == "update")
    {   
        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE id = '$id'";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {   
                ?>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="css/bootstrap.min.css">
                        <title>Update Data</title>
                    </head>
                    <body style="background-color: #20c997;">
                        <div class="container">
                            <h2 class="p-4">Update Data</h2>
                            <hr>
                            <form action="" method="POST" >
                                <div class="form-group">
                                    <label for="buku">Buku</label>
                                    <input type="text" id="buku" name="buku" value="<?php echo $row['buku'];?>" class="form-control" placeholder="Nama Buku" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="penulis">Penulis</label>
                                    <input type="text" id="penulis" name="penulis" value="<?php echo $row['penulis'];?>"  class="form-control" placeholder="Nama Penulis" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" id="deskripsi" name="deskripsi" value="<?php echo $row['deskripsi'];?>" class="form-control" placeholder="Deskripsi" autocomplete="off">
                                </div>
                                <br>
                                <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
                                <a href="index.php" class="btn btn-danger">CANCEL</a>
                            </form>
                        </div>
                    </body>
                    </html>
                <?php
            }
        }
    } 
     
    $id = $_GET['id'];

    if(isset($_POST['update']))
    {
        $buku      = $_POST['buku'];
        $penulis   = $_POST['penulis'];
        $deskripsi = $_POST['deskripsi'];
        $query     = "UPDATE products 
                        SET 
                        buku = '$buku',
                        penulis = '$penulis',
                        deskripsi = '$deskripsi'
                        WHERE
                        id = $id";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            echo "<script>
                    alert('Data berhasil di update!');
                    document.location = 'index.php';
                    </script>";
        } else
        {
            echo "<script>
                    alert('Data berhasil di update!');
                    document.location = 'index.php';
                    </script>";
        }
    }

    //Delete Data
    if($_GET['action'] == "delete")
    {
        $id = $_GET['id'];
        $query = "DELETE FROM products WHERE id = $id";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            echo "<script>
                    alert('Data berhasil dihapus!');
                    document.location = 'index.php';
                  </script>";
        } else
        {
            echo "<script>
                    alert('Data gagal dihapus!');
                    document.location = 'index.php';
                  </script>";
        }
    }
}
?>
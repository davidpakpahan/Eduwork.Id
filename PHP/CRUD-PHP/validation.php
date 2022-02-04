<?php
session_start();
include "conn.db.php";
if(isset($_POST['update']))
{

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kuantitas = $_POST['kuantitas'];
    // $errors = ['nama'=>'',
    //           'harga'=>'',
    //       'kuantitas'=>''];
    $errors =[];

    if(empty($nama))
    {
        $errors['nama'] = "Nama tidak boleh kosong!";
    } elseif (!preg_match('/^[a-zA-Z ]*$/', $nama))
    {
        $errors['nama'] = "Nama hanya Angka dan Spasi saja!";
    }
    
    if(empty($harga))
    {
        $errors['harga'] = "Harga tidak boleh kosong!";
    } elseif (!preg_match('/^[0-9]*$/', $harga))
    {
        $errors['harga'] = "Hanya Angka saja!";
    }
    
    if(empty($kuantitas))
    {
        $errors['kuantitas'] = "Kuantitas tidak boleh kosong!";
    } elseif (!preg_match('/^[0-9]*$/', $kuantitas))
    {
        $errors['kuantitas'] = "Hanya Angka saja!";
    }
    

    
    if(count($errors) > 0)
    {
        $_SESSION['errors'] = $errors;
        header( "Location: update.php?id=" . $_POST['id'] );
        exit();
    } else
    {
    $query = "UPDATE products
                SET
                nama      = '$nama',
                harga     = '$harga',
                kuantitas = '$kuantitas'
                WHERE
                id        = '$id'
                ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "<script>
                alert('Data berhasil di Update!');
                document.location.href = 'index.php';
                </script>";
    } else
    {
        echo "<script>
                alert('Data gagal di Update!');
                document.location.href = 'index.php';
                </script>";
    }
    }    
}
?>
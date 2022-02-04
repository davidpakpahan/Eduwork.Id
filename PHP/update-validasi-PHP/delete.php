<?php
include "conn.db.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $query = "DELETE FROM products WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "<script>
        alert('Data berhasil dihapus!');
        document.location.href ='index.php';
        </script>";
    } else
    {
        echo "<script>
              alert('Data gagal dihapus!');
              document.location.href ='index.php';
              </script>";
    }
}
?>
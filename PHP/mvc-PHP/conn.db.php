<?php
 // Variabel database
 $severName = "localhost";
 $userName = "root";
 $password = "";
 $database = "tokosyar'i";
 
 // Variabel koneksi database
 $conn = mysqli_connect($severName, $userName, $password, $database);
 
 // Cek kerberhasilan koneksi database ke php
 if( !$conn )
 {
     die("Gagal terhubung");
 }
?>
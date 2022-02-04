<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$database = "products";

$conn = mysqli_connect($serverName, $userName, $password, $database);

if (!$conn)
{
    echo "Gagal terhubung";
}
?>
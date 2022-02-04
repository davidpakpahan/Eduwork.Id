<?php
$nameServer = "localhost";
$userName = "root";
$password = "";
$nameDatabase = "products";
$conn = mysqli_connect( $nameServer, $userName, $password, $nameDatabase ) or die( mysqli_error( $conn ) );
?>
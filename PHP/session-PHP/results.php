<?php
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$error = [];

function rupiah($harga_produk)
{
    $hasil_rupiah = "Rp" . number_format($harga_produk, 2, ',', '.');
    return $hasil_rupiah;
}

if (empty($nama_produk)) {
    $error_nama = 'Nama produk wajib di isi !';
} elseif (!ctype_alpha($nama_produk)) {
    $error_nama = 'Masukkan text';
}

if (empty($harga_produk)) {
    $error_harga = 'Harga produk wajib di isi !';

} elseif (!is_numeric($harga_produk)) {
    $error_harga = 'Masukkan angka';
}

$_SESSION['error'] = $error;

if (count($error) > 0) {
    header('location: form.php');
}

include "form.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php
session_start();
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kuantitas = $_POST['kuantitas'];
    $errors = [];

    if ( empty( $nama ) ) {
        $errors['nama'] = 'Nama tidak boleh kosong';
    }

    if ( empty( $harga ) ) {
        $errors['harga'] = 'Harga tidak boleh kosong';
    }

    if ( empty( $kuantitas ) ) {
        $errors['kuantitas'] = 'Kuantitas tidak boleh kosong';
    }

    if ( count( $errors ) > 0 ) {
        $_SESSION['errors'] = $errors;
        header( 'Location: index.php' );
    }
}

?>
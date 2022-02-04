<?php
require "conn.db.php";
function query( $query ) {
    global $conn;
    $result = mysqli_query( $conn, $query );
    $rows = [];
    while ( $row = mysqli_fetch_assoc( $result ) ) {
        $rows[] = $row;
    }
    return $rows;
}

// Insert Data Siswa
function insert( $data ) {
    global $conn;
    $nama = $data["nama"];
    $harga = $data["harga"];
    $kuantitas = $data["kuantitas"];
    $query = "INSERT INTO products VALUES ('', '$nama', '$harga', '$kuantitas')";
    mysqli_query( $conn, $query );
    return mysqli_affected_rows( $conn );
}

// Delete Data Siswa
function delete( $id ) {
    global $conn;
    mysqli_query( $conn, "DELETE FROM products WHERE id = $id" );
    return mysqli_affected_rows( $conn );
}

?>
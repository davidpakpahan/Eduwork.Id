<?php
 if(isset($_GET['search']))
 {
     $search = $_GET['search'];
     $query  = "SELECT * FROM products WHERE CONCAT(nama, harga, kuantitas) LIKE'%$search%'"; 
 } else
 {
     $query = "SELECT * FROM products ORDER BY id DESC";
 }
?>
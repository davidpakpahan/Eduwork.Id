<?php
$filter = "";

if(isset($_GET['filter-harga']))
{
    if($_GET['filter-harga'] == "murah-mahal")
    {
        $filter = "ASC";
    }elseif($_GET['filter-harga'] == "mahal-murah")
    {
        $filter = "DESC";
    }

    $query = "SELECT * FROM products ORDER BY harga $filter";
}
?>
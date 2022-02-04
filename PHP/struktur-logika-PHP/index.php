<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Struktur logika PHP</title>
  </head>
  <body>
<table border="1" cellpadding="10" cellspacing="0">
<?php
$no = "No";
$name_product = "Nama Produk";
echo "<td style='background:black; color:white;'>$no</td>";
echo "<td style='background:black; color:white;'>$name_product</td>";
?>
<?php for ( $x = 1; $x <= 5; $x++ ) {
    echo "<tr>";
    echo "<td>1</td>";
    echo "<td>Komputer 1</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>

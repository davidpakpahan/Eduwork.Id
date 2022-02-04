
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk Buku Sekolah</title>
  </head>
  <body>
  <h1>Data Produk</h1>
  <?php
if (isset($_GET["insert=true"])) {
    include "include/index.php";
} else if (isset($_GET["insert=true"])) {
    include "include/index.php";
}

?>
  <form action="" method="post">
  <label for="">Nama Produk : </label>
  <input type="text" name="nama" id="nama"> <br><br>
  <label for="">Kategori : </label>
  <input type="text" name="kategori" id="kategori"><br><br>
  <label for="">Harga : </label>
  <input type="text" name="harga" id="harga"><br><br>
  <label for="">Jumlah : </label>
  <input type="text" name="jumlah" id="jumlah"><br><br>
  <button type="submit"> Cari !</button><br><br>
  </form>
<table border="1" cellpadding="10" cellspacing="0">
<?php
$no = "No";
$name_product = "Nama Buku";
$harga = "Harga";
$kategori = "Kategori";
$jumlah = "Jumlah";
echo "<td style='background:black; color:white;'>$no</td>";
echo "<td style='background:black; color:white;'>$name_product</td>";
echo "<td style='background:black; color:white;'>$harga</td>";
echo "<td style='background:black; color:white;'>$kategori</td>";
echo "<td style='background:black; color:white;'>$jumlah</td>";
$produk_buku = [
    ["no" => "1",
        "nama" => "Matematika",
        "harga" => 10000,
        "kategori" => "buku",
        "jumlah" => 1],

    ["no" => "2",
        "nama" => "IPA",
        "harga" => 10000,
        "kategori" => "buku",
        "jumlah" => 5],

    ["no" => "3",
        "nama" => "IPS",
        "harga" => 10000,
        "kategori" => "buku",
        "jumlah" => 10],

    [
        "no" => "4",
        "nama" => "Bahasa Indonesia",
        "harga" => 10000,
        "kategori" => "buku",
        "jumlah" => 6],

    ["no" => "5",
        "nama" => "Bahasa Inggris",
        "harga" => 10000,
        "kategori" => "buku",
        "jumlah" => 7],

    ["no" => "6",
        "nama" => "Seni Budaya",
        "harga" => 10000,
        "kategori" => "buku",
        "jumlah" => 11],

    ["no" => "7",
        "nama" => "Fisika",
        "harga" => 10000,
        "kategori" => "buku",
        "jumlah" => 9],

    ["no" => "8",
        "nama" => "Pendidikan Agama Islam",
        "harga" => 10000,
        "kategori" => "buku",
        "jumlah" => 20],

    ["no" => "9",
        "nama" => "Penjaskes",
        "harga" => 10000,
        "kategori" => "buku",
        "jumlah" => 15],

    ["no" => "10",
        "nama" => "Bahasa Arab",
        "harga" => 10000,
        "kategori" => "buku",
        "jumlah" => 13],
];
?>

    <?php foreach ($produk_buku as $produk): ?>
        <tr>
        <td><?php echo $produk["no"]; ?></td>
        <td><?php echo $produk["nama"]; ?></td>
        <td><?php echo $produk["harga"]; ?></td>
        <td><?php echo $produk["kategori"]; ?></td>
        <td><?php echo $produk["jumlah"]; ?></td>
        </tr>

        <?php endforeach;?>

</table>
</body>
</html>

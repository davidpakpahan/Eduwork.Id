<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrusctor OOP PHP</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kuantitas</th>
            <th>Harga</th>
        </tr>
        <?php
        include ('read.data.php');
        $read    = new Read();
        $products = $read->getAll('products');
        $no = 1;
        foreach ($products as $row)
            {
                ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $row['nama'];?></td>
                        <td><?php echo $row['harga'];?></td>
                        <td><?php echo $row['kuantitas'];?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>
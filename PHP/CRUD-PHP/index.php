<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>CRUD : PHP Connect Database to PHP</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>PHP - CRUD menggunakan Bootstrap</h1><hr>
        <div class="row">
            <div class="col-md-4">
                <a href="insert.php" class="btn btn-success mb-2">INSERT DATA</a>
            </div>
            <div class="col-md-4">
                <form action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="text"
                               name="search"
                               class="form-control"
                               placeholder="Cari Produk disini..."
                               autocomplete="off"
                               value="<?php
                                        if(isset($_GET['search']))
                                        {
                                            echo $_GET['search'];
                                        }
                                      ?>">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <form action="" method="GET">
                        <div class="input-group mb-3">
                            <select name="filter-harga" class="form-control">
                                <option value="">Cari berdasarkan</option>
                                <option value="murah-mahal"
                                    <?php
                                        if(isset($_GET['filter-harga']) && $_GET['filter-harga'] == "murah-mahal")
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                >Harga Termurah</option>
                                <option value="mahal-murah"
                                    <?php
                                        if(isset($_GET['filter-harga']) && $_GET['filter-harga'] == "mahal-murah")
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                >Harga Termahal</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
            </div>
        </div>
            <table class="table table-bordered" style="background-color: white;">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Kuantitas</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php
                    include "conn.db.php";
                    include "search.php";
                    include "filter.php";

                    $query_run = mysqli_query($conn, $query);

                    if($query_run)
                    {   $i = 1;
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                                <tbody>
                                    <tr>
                                        <th><?php echo $i++?></th>
                                        <th><?php echo $row['nama']?></th>
                                        <th><?php echo $row['harga']?></th>
                                        <th><?php echo $row['kuantitas']?></th>
                                        <th><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a></th>
                                        <th><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus ?')">Delete</a></th>
                                    </tr>
                                </tbody>
                            <?php
                        }

                    } else
                    {
                        echo "Data tidak ditemukan";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
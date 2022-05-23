<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "header.php";
        include "koneksi.php";
        // '".$_GET['id_produk']."'
        $qry_detail_produk=mysqli_query($conn, "select * from  produk where id_produk = '".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_detail_produk);
    ?>
    <main class="container">
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-primary">Details </h1>
        </div>
    </section>

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="img/<?=$dt_produk['foto_produk']?>" height="auto" width="300px"><br><br><br><hr><br>
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <form action="masukkan_keranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="POST">
                <input type="hidden" name="id_produk" value="<?=$data_produk['id_produk']?>">
                <table class="table table-hover table-stripped">
                    <thead>
                        <tr>
                            <td>Nama Produk</td>
                            <td><?=$dt_produk['nama_produk']?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?=$dt_produk['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><?=$dt_produk['harga']?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Produk</td>
                            <td><input type="number" name="jumlah_produk" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="btn btn-primary" value="Check Out"></td>
                        </tr>
                    </thead>
                </table>
            </form>
            </div>
            </div>
        </div>
    </div>

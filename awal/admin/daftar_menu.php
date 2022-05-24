
<?php
include "header.php";
?>   
   <div id="food-menu" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Pilihan Menu</h2>
            <p class="lead main text-center">Tidak ada cinta yang lebih tulus dari cinta makanan!</p>

            <div class="row">
    <?php 
    include "koneksi.php";
    $qry_produk=mysqli_query($conn,"select * from produk");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src=img/<?=$dt_produk['foto_produk']?> class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,500)?></p>
                <p class="card-text"><?=substr($dt_produk['harga'], 0,500)?></p>
                <a href="ubah_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-warning">Ubah</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
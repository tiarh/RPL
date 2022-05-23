<?php
if($_POST){
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $foto_produk=$_POST['foto_produk'];
  
    if(empty($foto_produk)){
        echo "<script>alert('foto tidak boleh kosong');location.href='tambah_foto.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into produk (nama_produk, deskripsi, harga, foto_produk ) value ('".$nama_produk."','".$deskripsi."','".$harga."','".$foto_produk."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan foto');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan foto');location.href='home.php';</script>";
        }
    }
}
?>

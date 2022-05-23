<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $deksripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $foto_produk=$_POST['foto_produk'];
    if(empty($nama)){
        echo "<script>alert('foto tidak boleh kosong');location.href='tambah_foto.php';</script>";

    } elseif(empty($deksripsi)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_foto.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($foto_produk)){
            $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."',deskripsi='".$deksripsi."', harga='".$harga."', foto_produk='".$foto_produk."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update produk');location.href='home.php';</script>";
            } else {
                echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."',deskripsi='".$deksripsi."', harga='".$harga."', foto_produk='".$foto_produk."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update produk');location.href='home.php';</script>";
            } else {
                echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
            }
        }
        
    } 
}
?>

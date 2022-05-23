<?php
if($_POST){
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama=$_POST['nama'];
    $telp=$_POST['telp'];
    $alamat=$_POST['alamat'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($telp)){
        echo "<script>alert('telpon tidak boleh kosong');location.href='tambah_pelangan.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($alamat)){
            $update=mysqli_query($conn,"update pelanggan set nama='".$nama."',telp='".$telp."', alamat='".$alamat."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update pelanggan set nama='".$nama."',telp='".$telp."', alamat='".$alamat."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        }
        
    } 
}
?>

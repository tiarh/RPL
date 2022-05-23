
<?php
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tampil Petugas</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA PETUGAS</th><th>USERNAME</th>
    <th>LEVEL</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
$qry_petugas=mysqli_query($conn,"select * from petugas");
            $no=0;
            while($data_petugas=mysqli_fetch_array($qry_petugas)){
            $no++;?>
        <tr>       
            <td><?=$no?></td>
            <td><?=$data_petugas['nama_petugas']?></td>
            <td><?=$data_petugas['username']?></td>
            <td><?=$data_petugas['level']?></td>
        
        </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

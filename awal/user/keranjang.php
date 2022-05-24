<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <?php
        include "header.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <h1>Cart List</h1>
            </div>
            <div class="card-body">
            <table class="table table-primary table-stripped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Product</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            include "koneksi.php";
            $no = 1;
            $query = mysqli_query($conn, 'SELECT * FROM produk');                                
            
            $result = array(); 
            while ($data = mysqli_fetch_array($query)) {
            $result[] = $data; //result dijadikan array 
            }                
            //selanjutnya result array di foreach
            foreach ((array)@$_SESSION['cart'] as $key => $value) : 
             $subtotal=$value['subtotal'];
             $subtotal2 = number_format($subtotal,2);?>
                    <tr>
                        <td><?=($key+1)?></td>
                        <td><?=$value['nama_produk']?></td>
                        <td><?=$value['qty']?></td>
                        <td><?=$value['harga']?></td>
                        <td><?php echo("Rp. {$subtotal2} "); ?></td>
                        <td><a href="delete_cart.php?id=<?=$key?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a></td>
                    </tr>
                    <?php endforeach;
            ?>
                </tbody>
            </table>
            <a href="checkout.php" type="button" class="btn btn-primary">Checkout</a>
            
            </div>
        </div>
    </div>
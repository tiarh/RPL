<div class="agileits_header">
    <div class="container">
        <div class="w3l_offers">
            <p>DAPATKAN PENAWARAN MENARIK KHUSUS HARI INI, BELANJA SEKARANG!</p>
        </div>
        <div class="agile-login">
            <ul>
                <?php
                if (!isset($_SESSION['log'])) {
                    echo '
					<li><a href="registered.php"> Daftar</a></li>
					<li><a href="login.php">Masuk</a></li>
					';
                } else {

                    if ($_SESSION['role'] == 'Member') {
                        echo '
					<li style="color:white">Halo, ' . $_SESSION["name"] . '
					<li><a href="logout.php">Keluar?</a></li>
					';
                    } else {
                        echo '
					<li style="color:white">Halo, ' . $_SESSION["name"] . '
					<li><a href="admin">Admin Panel</a></li>
					<li><a href="logout.php">Keluar?</a></li>
					';
                    };
                }
                ?>

            </ul>
        </div>
        <div class="product_list_header">
            <a href="cart.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
            </a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="logo_products p-3">
    <div class="container">
        <div class="d-flex align-items-center">

            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi Kami : (+6281) 222 333</li>
                </ul>
            </div>
            <div class="w3ls_logo_products_left">
                <h1>
                    <a href="index.php">
                        <img src="./images/agro-es-logo.png" height="75px">
                    </a>
                </h1>
            </div>
            <div class="w3l_search">
                <form action="search.php" method="post">
                    <input type="search" name="Search" placeholder="Cari produk...">
                    <button type="submit" class="btn btn-default search" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>

<!-- navigation -->
<div class="navigation-agileits">
    <div class="container">
        <nav class="navbar navbar-expand-lg align-items-center">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-light fa-square-ellipsis fa-2x text-light "></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Keranjang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="daftarorder.php">Daftar Order</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->
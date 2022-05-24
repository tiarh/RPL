<?php
session_start();
include 'dbconnect.php';

?>
<!DOCTYPE html>
<html>

<!-- head -->
<?php include_once './components/head.php' ?>
<!-- //head  -->

<body>
	<!-- header -->
	<?php include_once './components/header.php' ?>
	<!-- //header -->

	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Kategori</li>
			</ol>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!--- beverages --->
	<div class="products">
		<div class="container">
			<div class="col-8 products-right">
				<div class="agile_top_brands_grids">


					<?php
					$brgs = mysqli_query($conn, "SELECT * from produk order by idproduk ASC");
					$x = mysqli_num_rows($brgs);

					if ($x > 0) {
						while ($p = mysqli_fetch_array($brgs)) {
					?>

							<div class="col-md-4 top_brand_left">
								<div class="hover14 column">
									<div class="agile_top_brand_left_grid">
										<div class="agile_top_brand_left_grid_pos">
											<img src="images/offer.png" alt=" " class="img-responsive" />
										</div>
										<div class="agile_top_brand_left_grid1">
											<figure>
												<div class="snipcart-item block">
													<div class="snipcart-thumb">
														<a href="product.php?idproduk=<?php echo $p['idproduk'] ?>"><img src="<?php echo $p['gambar'] ?>" width="200px" height="200px"></a>
														<p><?php echo $p['namaproduk'] ?></p>
														<h4>Rp<?php echo number_format($p['hargaafter']) ?> <span>Rp<?php echo number_format($p['hargabefore']) ?></span></h4>
													</div>
													<div class="snipcart-details top_brand_home_details">
														<fieldset>
															<a href="product.php?idproduk=<?php echo $p['idproduk'] ?>"><input type="submit" class="button" value="Lihat Produk" /></a>
														</fieldset>
													</div>
												</div>
											</figure>
										</div>
									</div>
								</div>
							</div>
					<?php
						}
					} else {
						echo "Data tidak ditemukan";
					}
					?>

					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--- beverages --->

	<!-- //footer -->
	<?php include_once('components/footer.php'); ?>
	<!-- //footer -->

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- top-header and slider -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 4000,
				easingType: 'linear'
			};


			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->

	<!-- main slider-banner -->
	<script src="js/skdslider.min.js"></script>
	<link href="css/skdslider.css" rel="stylesheet">
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#demo1').skdslider({
				'delay': 5000,
				'animationSpeed': 2000,
				'showNextPrev': true,
				'showPlayButton': true,
				'autoSlide': true,
				'animationType': 'fading'
			});

			jQuery('#responsive').change(function() {
				$('#responsive_wrapper').width(jQuery(this).val());
			});

		});
	</script>
	<!-- //main slider-banner -->
</body>

</html>
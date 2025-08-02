<?php
session_start();
?>
<?php require './includes/head.php' ?>
<?php require './includes/conn.php';
require './includes/is_added_to_cart.php'

?>

<section class="banner_part">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="banner_slider owl-carousel">
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-12 col-12 col-sm-12">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h2 style="font-size: 50px">Flaunt Your Style<br> Own Your Look!</h2>
										<p>
											Where fashion meets fearless individuality!
										</p>
										<a href="category.php" class="btn_2">Buy now</a>
									</div>
								</div>
							</div>
							<div class="banner_img col-lg-5 col-sm-12 col-md-12 col-12">
								<img src="img/banners/banner.png" alt="" />
							</div>
						</div>
					</div>
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-12 col-sm-12">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1 style="font-size: 50px">Fashion That <br> Speaks Your Language</h1>
										<p>
											Step into a world of fashion that celebrates YOU!
										</p>
										<a href="#" class="btn_2">Buy now</a>
									</div>
								</div>
							</div>
							<div class="banner_img col-lg-6 col-md-12 col-12 col-sm-12">
								<img src="img/banners/banner1.png" alt="" />
							</div>
						</div>
					</div>
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-12 col-sm-12">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1 style="font-size: 50px">Shop Like a Queen,<br> Rule Your Wardrobe!</h1>
										<p>
											Fashion should be fun, fearless, and uniquely yours.
										</p>
										<a href="#" class="btn_2">Buy now</a>
									</div>
								</div>
							</div>
							<div class="banner_img col-lg-6 col-md-12 col-12 col-sm-12">
								<img src="img/banners/banner2.png" alt="" height="500px" width="500px" />
							</div>
						</div>
					</div>
				</div>
				<div class="slider-counter"></div>
			</div>
		</div>
	</div>
</section>


<section class="product_list section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section_tittle text-center">
					<h2>Let's fill the cart!!</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="product_list_slider owl-carousel">
					<div class="single_product_list_slider">
						<div class="row align-items-center justify-content-between">
							<?php

							$query = "SELECT * from `products`";
							$result = mysqli_query($con, $query);

							while ($row = mysqli_fetch_array($result)) {
								echo '<div class="col-lg-3 col-sm-6" style="padding: 20px 30px !important;">
										<div class="single_product_item">
											<img width="100px" height="300px" src="img/products/' . $row['image'] . '" alt="djwij" />
											<div class="single_product_text">
												<h4>' . $row['title'] . '</h4>
												<h3>Rs. ' . $row['price'] . '</h3>';
								if (!check_if_added_to_cart($row['id'])) {
									echo '<a href="scripts/cart_add.php?id=' . $row['id'] . '&qty=1" class="add_cart">+ add to cart<i class="ti-heart"></i></a>';
								} else {
									echo '<a href="#" class="add_cart" disabled>+ add to cart<i class="ti-heart"></i></a>';
								}

								echo ' </div>
										</div>
									</div>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require "./includes/footer.php" ?>

<script src="js/jquery-1.12.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.js"></script>

<script src="js/swiper.min.js"></script>

<script src="js/masonry.pkgd.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>

<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/custom.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721abfb4f723390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>
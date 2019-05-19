<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Contact</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/availability-calendar.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	@include('components.cabecalho')
	<!--================ End Header Area =================-->

	<!--================ Start banner Area =================-->
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-6">
					<h1>Fala com a gente</h1>
					<hr>
					<div class="breadcrmb">
						<p>
							<a href="/">início</a>
							<span class="lnr lnr-arrow-right"></span>
							<a href="contact">contato</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!--================ Contact Area =================-->
	<section class="contact-area section-gap">
		<div class="container">
			<div class="row align-items-start">
				<div class="col-lg-6 col-md-6">
					<div id="contactMap"></div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1>
							Rooftop <br>
							Fine Dinning <br>
							Restaurant <br>
						</h1>
						<div class="mb-20">
							<p>432 Wyandotte Ave, Lakewood, OH, 44107</p>
							<p>432 Wyandotte Ave, Lakewood, OH, 44107</p>
						</div>
						<div class="mb-20">
							<p>012 44 (216) 785-9346</p>
							<p>012 44 (216) 785-9346</p>
							<p>012 44 (216) 785-9346</p>
						</div>
						<div class="mail">
							<p>info@rooftoprestaurant.co.uk</p>
							<p>support@rooftoprestaurant.com</p>
						</div>
					</div>
					<form class="contact-form" id="myForm" action="">
						<div class="row">
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="contact-name" placeholder="Contact Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Name'"
								 class="form-control" required="" type="text">
							</div>
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="email-address" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'"
								 class="form-control" required="" type="email">
							</div>
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="phone-number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
								 class="form-control" required="" type="text">
							</div>
							<div class="col-lg-12 d-flex flex-column">
								<textarea class="form-control" name="post-message" placeholder="Post a message" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Post a message'" required=""></textarea>
							</div>

							<div class="col-lg-12 d-flex justify-content-end">
								<button class="primary-btn mt-30 text-uppercase">Send Message</button>
							</div>
							<div class="alert-msg"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Contact Area =================-->
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
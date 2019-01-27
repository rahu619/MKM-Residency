<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>

<?php require 'header_ref.php' ?>

<body>

	<div class="gtco-loader"></div>

	<div id="page">

		<!-- Menu -->
		<?php include("header.php"); ?>

		<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_3.jpg)">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center">

						<div class="row row-mt-15em">
							<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
								<h1 class="cursive-font">Contact us!</h1>
							</div>

						</div>

					</div>
				</div>
			</div>
		</header>


		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6 animate-box">
							<h3>Get In Touch</h3>
							<form action="#">
								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="name">Name</label>
										<input type="text" id="name" class="form-control" placeholder="Your firstname">
									</div>

								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="email">Email</label>
										<input type="text" id="email" class="form-control" placeholder="Your email address">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="message">Message</label>
										<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something"></textarea>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" value="Send Message" class="btn btn-primary">
								</div>

							</form>
						</div>
						<div class="col-md-5 col-md-push-1 animate-box">


							<div class="gtco-contact-info">
								<h3>Contact Information</h3>
								<ul>
									<li class="address">9/1 NORTH, <br> Durairaj Chatra St, Vasantha Nagar, Ramanathapuram, Tamil Nadu 623504</li>
									<li class="phone"><a href="tel://1234567920">+91 94872 27777</a></li>
									<li class="email"><a href="mailto:info@yoursite.com">info@mkmresidency.com</a></li>
								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)"
		 data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row row-pb-md">

				<!-- Footer -->
				<?php include("footer.php")?>

				</div>



			</div>
		</footer>
		<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
		includeHTML();
	</script>
</body>

</html>
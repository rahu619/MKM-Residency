<!DOCTYPE HTML>
<html>

<?php

require 'header_ref.php';

if (!empty($_SESSION['userID'])) {
    header("Location: /savory/adminhome.php");
    exit;
}

?>


<body>

	<div class="gtco-loader"></div>

	<div id="page">



		<!-- Menu -->
		<?php include "header.php";?>

		<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_1.jpg)"
		 data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">


						<div class="row row-mt-15em">
							<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
								<h1 class="cursive-font">Welcome to <a href="#">MKM</a></h1>
								<h4 class="intro-text-small">
									We provide modest-quality mattress in a small room to
									large suites with bigger,higher-quality beds.
									Charming yet, beautiful,cozy rooms.
								</h4>

							</div>
							<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
								<div class="form-wrap">
									<div class="tab">

										<div class="tab-content">
											<div class="tab-content-inner active" data-content="signup">
												<!-- <h3 class="cursive-font">Book Online</h3> -->
												<form method="post" action="booking.php">

													<div class="row form-group">
														<div class="col-md-12">
															<label for="date-start">Check in</label>
															<input type="text" id="checkin" name="checkin" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control" required>
														</div>
													</div>

													<div class="row form-group">
														<div class="col-md-12">
															<label for="date-start">Check out</label>
															<input type="text" id="checkout" name="checkout" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control" required>
														</div>
													</div>

													<div class="row form-group">
														<div class="col-md-12">
															<label for="activities">Adults</label>
															<select id="adults" name="adults" class="form-control" required>
																<option disabled>Select One</option>
																<option>1</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5+</option>
															</select>
														</div>
													</div>

													<div class="row form-group">
														<div class="col-md-12">
															<label for="activities">Children</label>
															<select id="children" name="children" class="form-control">
																<option selected>0</option>
																<option>1</option>
																<option>2</option>
															</select>
														</div>
													</div>

													<!-- <div class="row form-group">
														<div class="col-md-12">
															<label for="date-start">Time</label>
															<input type="text" id="time" class="form-control">
														</div>
													</div> -->

													<div class="row form-group">
														<div class="col-md-12">
															<input type="submit" class="btn btn-primary btn-block" value="Book Now">
														</div>
													</div>
												</form>
											</div>


										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</header>



		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2 class="cursive-font primary-color">Accomodation</h2>
						<p>The hotel offers 30 spacious, well-appointed and beautifully furnished guest rooms
							comprising of 5 Royal Suites, 5 Deluxe Twins and 10 Standard Rooms,10 Exclusive Rooms .
							Each room has been meticulously designed, with a careful blend of contemporary and traditional elements to
							provide elegant and premium accommodation for the guests.

						</p>
					</div>
				</div>
				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="images/img_1.jpg" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_1.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Standard Room</h2>
								<p>Basic facilities</p>
								<p><span class="price cursive-font">₹4000</span></p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="images/img_2.jpg" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_2.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Exclusive Room</h2>
								<p>Twin cot with water heater</p>
								<p><span class="price cursive-font">₹7000</span></p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="images/img_3.jpg" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_3.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Deluxe Double</h2>
								<p>King sized bed</p>
								<p><span class="price cursive-font">₹7500</span></p>

							</div>
						</a>
					</div>


					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="images/img_4.jpg" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_4.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Royal Suite</h2>
								<p></p>
								<p><span class="price cursive-font">₹8500</span></p>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>

		<div id="gtco-features">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2 class="cursive-font">Our Services</h2>
						<p>We offer 24x7 room service,Doctor on call,house keeping services and much more.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="ti-face-smile"></i>
							</span>
							<h3>Happy People</h3>
							<p>9 out of 10 customers recommend us to fellow travellers.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="ti-heart"></i>
							</span>
							<h3>Doctor on Call</h3>
							<p>24/7 on call doctor</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="ti-car"></i>
							</span>
							<h3>Car parking facility</h3>
							<p>Spacious parking lots</p>
						</div>
					</div>


				</div>
			</div>
		</div>


		<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"
		 data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="gtco-container text-center">
				<div class="display-t">
					<div class="display-tc">
						<h1>&ldquo; Their high quality of service makes me back over and over again!&rdquo;</h1>
						<p>&mdash; John Doe, CEO of XYZ Co.</p>
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-counter" class="gtco-section">
			<div class="gtco-container">

				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2 class="cursive-font primary-color">Fun Facts</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab
							aliquam dolor eius.</p>
					</div>
				</div>

				<div class="row">

					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
						<div class="feature-center">
							<span class="counter js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50">1</span>
							<span class="counter-label">Avg. Rating</span>

						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
						<div class="feature-center">
							<span class="counter js-counter" data-from="0" data-to="43" data-speed="5000" data-refresh-interval="50">1</span>
							<span class="counter-label">Food Types</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
						<div class="feature-center">
							<span class="counter js-counter" data-from="0" data-to="32" data-speed="5000" data-refresh-interval="50">1</span>
							<span class="counter-label">Chef Cook</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
						<div class="feature-center">
							<span class="counter js-counter" data-from="0" data-to="1985" data-speed="5000" data-refresh-interval="50">1</span>
							<span class="counter-label">Year Started</span>

						</div>
					</div>

				</div>
			</div>
		</div>



		<!-- <div id="gtco-subscribe">
			<div class="gtco-container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2 class="cursive-font">Subscribe</h2>
						<p>Be the first to know about the new templates.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<form class="form-inline">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Your Email">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<button type="submit" class="btn btn-default btn-block">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> -->

		<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)"
		 data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row row-pb-md">




					<div class="col-md-12 text-center">
						<div class="gtco-widget">
							<h3>Get In Touch</h3>
							<ul class="gtco-quick-contact">
								<li><a href="#"><i class="icon-phone"></i> +91 94872 27777</a></li>
								<li><a href="#"><i class="icon-mail2"></i> info@mkmresidency.com</a></li>
								<!-- <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li> -->
							</ul>
						</div>
						<div class="gtco-widget">
							<h3>Get Social</h3>
							<ul class="gtco-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="gtco-section">
						<div class="gtco-container">
							<div class="row">
								<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJU_yi7wGYATsRUpbN1npLFGY&key=AIzaSyAKbGDWX3SEAL-2I8FmuVTYc9Hst-g2Tlk."
								 width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>

						</div>
					</div>

				<!-- Footer -->
				<?php include "footer.php"?>

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

</body>

</html>
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
		<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner">

		</header>

 </div>


 <?php

if(isset($_POST['checkin']) ){

	$CHECKIN= htmlspecialchars($_POST['checkin']);
	$CHECKOUT= htmlspecialchars($_POST['checkout']);
	$ADULTS=1;
	$CHILDREN=0;
	 
	if(!empty($_POST['adults']))
		$ADULTS= $_POST['adults'];
	
	if(!empty($_POST['children']))
	   $CHILDREN= $_POST['children'];
}
 ?>


 <div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12"></div>
				</div>
			</div>
</div>

<!-- Footer -->
<?php include("footer.php")?>

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


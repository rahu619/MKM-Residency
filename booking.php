<!DOCTYPE HTML>
<html>

<?php require 'header_ref.php' ?>

<body>

<div class="gtco-loader"></div>

	<div>

		<!-- Menu -->
		<?php include("header.php"); ?>
		<header id="gtco-header" class="gtco-cover gtco-cover-booking" role="banner">

		</header>

 </div>


 <?php

if(isset($_POST['checkin']) ){

	// $CHECKIN= htmlspecialchars($_POST['checkin']);
	// $CHECKOUT= htmlspecialchars($_POST['checkout']);
	// $ADULTS=1;
	// $CHILDREN=0;
	 
	// if(!empty($_POST['adults']))
	// 	$ADULTS= $_POST['adults'];
	
	// if(!empty($_POST['children']))
	//    $CHILDREN= $_POST['children'];
}
 ?>

<!-- Filter -->
 <div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-3">
						<div class="form-group has-feedback">
							<label for="checkin" class="control-label">Check in</label>
							<input id="checkin" autocomplete="off" class="form-control" type="text"/> 
							<i class="ti-calendar form-control-feedback"></i>
						</div>
					</div>
					<div class="col-md-3">
					     <div class="form-group has-feedback">
							<label for="checkout" class="control-label">Check out</label>
							<input id="checkout" autocomplete="off" class="form-control" type="text"/> 
							<i class="ti-calendar form-control-feedback"></i>
						  </div>
					</div>

					<div class="col-md-1">
						<div class="form-group has-feedback">
							<label for="adults" class="control-label">Adults</label>
							<select  id="adults" class="form-control">
										<option disabled selected>- Select -</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5+</option>
							</select>
						</div>
					</div>
					<div class="col-md-1">
						<div class="form-group has-feedback">
							<label for="children" class="control-label">Children</label>
							<select id="children" name="children" class="form-control">
										<option disabled selected>- Select -</option>
										<option>0</option>
										<option>1</option>
										<option>2</option>
							</select>
						</div>
					</div>

					<div class="col-md-2">
					</div>

				</div>
			</div>
</div>

<!-- Content -->
<article style="box-sizing: border-box;">
	<div class="row">
		<div id="content-box" class="col-sm-12">
        <div id="bookingtitle">Your Bookings</div>

			<div class="gtco-container">
				<div class="row">
				<div class="col-md-1">
				</div>
					<div class="col-md-8">

					<!-- Show room rows -->
					<div class="package_row">
						<div class="col-md-4">
							<div class="package_img" style="background:url(images/img_3.jpg) no-repeat center center;background-size: cover;"></div>
						</div>
						<div class="col-md-4">
								<div class="card-body d-flex flex-column">
											<h3 class="card-title pricing-card-title">Standard Room</h3>
											<p>Option to pay directly at the hotel.
											</p>
										
											
								</div>
						</div>
						<div class="col-md-4">
							<!-- Rate details -->
							<div class="card-body d-flex flex-column">
									<h1 class="card-title pricing-card-title">₹4000 <small class="text-muted">onwards</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
									<li>Tax exclusive</li>
									<li>Complimentary breakfast</li>
									</ul>
									<button type="button" class="align-self-end btn btn-lg btn-block btn-danger" style="margin-top: auto;">Book Now</button>
    						 </div>
							
						</div>
					</div>

					</div>
					
					<div class="col-md-4">

					</div>
				</div>

			</div>
	


			<div class="gtco-container toppadding">
				<div class="row">
				<div class="col-md-1">
				</div>
					<div class="col-md-8">

					<!-- Show room rows -->
					<div class="package_row">
						<div class="col-md-4">
							<div class="package_img" style="background:url(images/img_1.jpg) no-repeat center center;background-size: cover;"></div>
						</div>
						<div class="col-md-4">
								<div class="card-body d-flex flex-column">
											<h3 class="card-title pricing-card-title">Exclusive Room</h3>
											<p>Option to pay directly at the hotel.
											</p>
										
											
								</div>
						</div>
						<div class="col-md-4">
							<!-- Rate details -->
							<div class="card-body d-flex flex-column">
									<h1 class="card-title pricing-card-title">₹7000 <small class="text-muted">onwards</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
									<li>Tax exclusive</li>
									<li>Complimentary breakfast</li>
									</ul>
									<button type="button" class="align-self-end btn btn-lg btn-block btn-danger" style="margin-top: auto;">Book Now</button>
    						 </div>
							
						</div>
					</div>

					</div>
					
					<div class="col-md-4">

					</div>
				</div>

			</div>



		</div>
	</div>
</article>




<!-- Footer -->
<?php include("footer.php")?>

<?php require "script_ref.php"?>

<script>
   var data=new Array();
   $(function () {
		data = JSON.parse('<?php echo json_encode($_POST)?>');

		if(data!=null){
			$("#checkin").val(data.checkin);
			$("#checkout").val(data.checkout);
			$("#adults").val(data.adults);
			$("#children").val(data.chidren);
		}
	});

</script>

</body>



</html>


<!DOCTYPE HTML>
<html>

<?php require 'header_ref.php' ?>
<link href="css/availability-calendar.css" rel="stylesheet" type="text/css">
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


<!-- Calendar -->
<div class="gtco-calendar">
			<div class="gtco-container">
				<div class="row" style="padding-bottom:20px;">
				<div class="col-md-1"></div>
					<div class="col-md-10">
						<div id="calendar"></div>
					</div>
				<div class="col-md-1"></div>
				</div>
			</div>
 </div>

<!-- Content -->
<article style="box-sizing: border-box;">

<div class="col-md-9">
	<div class="row">
		<div id="content-box" class="col-sm-12">
        <div id="bookingtitle">Your Bookings</div>

			<div class="gtco-container">
				<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">

					<!-- Show room rows -->
					<div class="package_row">
						<div class="col-md-4">
							<div class="package_img" style="background:url(images/img_3.jpg) no-repeat center center;background-size: cover;"></div>
						</div>
						<div class="col-md-4">
								<div class="card-body d-flex flex-column flex-row-reverse">
									<h3 class="card-title pricing-card-title">Standard Room</h3>
									<p>Option to pay directly at the hotel.</p>	
								</div>
						</div>
						<div class="col-md-4">
							<!-- Rate details -->
							<div class="card-body d-flex flex-column flex-row-reverse">
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
					<div class="col-md-1"></div>
			
				</div>

			</div>
	


			<div class="gtco-container toppadding">
				<div class="row">
				<div class="col-md-1">
				</div>



					<div class="col-md-10">
					<!-- Show room rows -->
					<div class="package_row flex-row-reverse">
						<div class="col-md-4">
							<div class="package_img" style="background:url(images/img_1.jpg) no-repeat center center;background-size: cover;"></div>
						</div>
						<div class="col-md-4">
								<div class="card-body d-flex flex-column flex-row-reverse">
											<h3 class="card-title pricing-card-title">Exclusive Room</h3>
											<p>Option to pay directly at the hotel.</p>
										
											
						</div>
						</div>
						<div class="col-md-4">
						<div class="flex-row-reverse">	
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



					<div class="col-md-1"></div>

					</div>
					
				
				</div>

			</div>



		</div>
	</div>

	</div>



  <!-- right side -->

  <div class="col-md-3 rightDiv">
	<div class="card-body d-flex flex-column">
		<div class="flex-row-reverse">
			<h3 class="card-title pricing-card-title text-center">Total Charge</h3>
			 <hr class="horizontalLine">
				<div class="col-md-12 text-center roompriceCol">
					<span> INR 5000</span>
				</div>
			<div class="col-md-12 text-center"></div>
			<button type="button" class="align-self-end btn btn-lg btn-block btn-danger" style="margin-top: auto;">Confirm</button>
	   </div>
	</div>

</div>


</article>





<!-- Footer -->
<?php include("footer.php")?>

<?php require "script_ref.php"?>

<!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
<script src="js/availability-calendar.js"></script>
<script>

// Calendar

var unavailableDates = [
	{start: '2019-01-20', end: '2019-01-30'},
    {start: '2019-01-01', end: '2019-01-01'}
];

$('#calendar').availabilityCalendar(unavailableDates);

   var data=new Array();
   $(function () {
		data = JSON.parse('<?php echo json_encode($_POST)?>');

		if(data!=null){
			$("#checkin").val(data.checkin);
			$("#checkout").val(data.checkout);
			$("#adults").val(data.adults);
			$("#children").val(data.chidren);
		}


	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	});

</script>



</body>



</html>


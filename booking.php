<!DOCTYPE HTML>
<html>

<?php require 'header_ref.php' ?>

<body>

<div class="gtco-loader"></div>

	<div id="page">

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


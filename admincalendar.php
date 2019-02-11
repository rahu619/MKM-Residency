<!DOCTYPE HTML>
<html>
<?php require 'header_ref.php'?>
<link rel="stylesheet" href="css/pb.calendar.css" type="text/css">
<link href="css/availability-calendar.css" rel="stylesheet" type="text/css">
<style type="text/css">
	body {background-image: linear-gradient(to top, #cfd9df 0%, #fff 100%);font-family: -apple-system, BlinkMacSystemFont,
    â€œSegoe UIâ€, â€œRobotoâ€, â€œOxygenâ€,
    â€œUbuntuâ€, â€œCantarellâ€, â€œFira Sansâ€,
    â€œDroid Sansâ€, â€œHelvetica Neueâ€, sans-serif; }
		.container{
			display: block;
			margin: 100px auto;
			max-width: 768px;
		}

		.page-title{
			text-align: center;
			margin-bottom: 50px;
		}

		.page-title > small{
			color: gray;
		}

		.copyrights,
		.contact-info{
			text-align: center;
			font-size: 12px;
			color: gray;
		}

		.pb-calendar .schedule-dot-item.blue{
			background-color: blue;
		}

		.pb-calendar .schedule-dot-item.red{
			background-color: red;
		}

		.pb-calendar .schedule-dot-item.green{
			background-color: green;
		}

	</style>
<body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js" integrity="sha384-F13mJAeqdsVJS5kJv7MZ4PzYmJ+yXXZkt/gEnamJGTXZFzYgAcVtNg5wBDrRgLg9" crossorigin="anonymous"></script>

    <div class="container">
		<div id="pb-calendar" class="pb-calendar"></div>

	</div>

<?php require "script_ref.php"?>


<script src="js/pb.calendar.js"></script>

<script type="text/javascript">
jQuery(document).ready(function(){

	var current_yyyymm_ = moment().format("YYYYMM");

	$("#pb-calendar").pb_calendar({

		schedule_list : function(callback_, yyyymm_){
			var temp_schedule_list_ = {};

			temp_schedule_list_[current_yyyymm_+"03"] = [
				{'ID' : 1, style : "red"}
			];

			temp_schedule_list_[current_yyyymm_+"10"] = [
				{'ID' : 2, style : "red"},
				{'ID' : 3, style : "blue"},
			];

			temp_schedule_list_[current_yyyymm_+"20"] = [
				{'ID' : 4, style : "red"},
				{'ID' : 5, style : "blue"},
				{'ID' : 6, style : "green"},
			];
			callback_(temp_schedule_list_);
		},
		schedule_dot_item_render : function(dot_item_el_, schedule_data_){
			dot_item_el_.addClass(schedule_data_['style'], true);
			return dot_item_el_;
		}
	});
});
</script>

</body>
</html>
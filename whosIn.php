<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Michael Riesberg-Timmer's Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<?php
								require_once('Functions/header.php')
							?>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Who's In?</></h1>

                      <!-- CODE STUFF HERE -->

											<div id="display_here"></div>

									<div id="page-wrapper">

                    </header>
									</div>
								</section>

								<div id="demo">
								</div>

								<script>
									//document.getElementById("demo").innerHTML = "Test" + "<br>"
								</script>


 								<?php
								echo "<h2>Day is currently: " . date("l") . "</h2>";
								echo "<h2>Time is currently: " . date("g:i a") . "</h2>";
								echo "<h4>Legend: <br> Green light = currently in office <br> Yellow light = No office hours available <br> Red light = Not currently in office </h4>";
								echo "<br><br><br>";
								$professors = array("Paul Gray","Sarah Diesburg", "Mark Fienup", "Phillip East", "Aleksandar Poleksic", "J. Ben Schafer", "Eugene Wallingford", "Andrew Berns", "Mark Jacobson", "Sam Barr", "Mike Holmes");
								$picList = array("gray","diesburg", "fienup", "east", "poleksic", "schafer", "wallingford", "berns", "jacobson", "barr", "holmes");

								function inOffice ($professor) {
									if($professor == "Paul Gray"){
										$current_time = date("g:i a");
										$start1 = "9:30 am";
										$end1 = "10:30 am";
										$date1 = DateTime::createFromFormat('H:i a', $current_time);
										$date2 = DateTime::createFromFormat('H:i a', $start1);
										$date3 = DateTime::createFromFormat('H:i a', $end1);
										if (date("l") == "Monday" or date("l") == "Wednesday"){
											if ($date1 > $date2 && $date1 < $date3)
											{
											  return "green";
											}
											elseif ($date1 > $date4 && $date1 < $date5)
											{
												return "green";
											}
										}
										return "red";
									}

									if($professor == "Sarah Diesburg"){
										return "yellow";
									}

									if($professor == "Mark Fienup"){
										$current_time = date("g:i a");
										$startMondayFriday = "8:00 am";
										$endMondayTuesdayThursday = "11:00 am";
										$startMondayTuesdayWednsdayThursday = "1:10 pm";
										$endMondayWednesday = "2:00 pm";
										$startTuesdayThursday = "9:30 am";
									  $endTuesdayThursday = "11:45 am";
										$endFriday = "9:00 am";
										$date1 = DateTime::createFromFormat('H:i a', $current_time);
										$date2 = DateTime::createFromFormat('H:i a', $startMondayFriday);
										$date3 = DateTime::createFromFormat('H:i a', $endMondayTuesdayThursday);
										$date4 = DateTime::createFromFormat('H:i a', $startMondayTuesdayWednsdayThursday);
										$date5 = DateTime::createFromFormat('H:i a', $endMondayWednesday);
										$date6 = DateTime::createFromFormat('H:i a', $startTuesdayThursday);
										$date7 = DateTime::createFromFormat('H:i a', $endTuesdayThursday);
										$date8 = DateTime::createFromFormat('H:i a', $endFriday);
										if(date("l") == "Monday"){
											if($date1 > $date2 and $date1 < $date3){
												return "green";
											}
											elseif($date1 > $date4 and $date1 < $date5){
												return "green";
											}
										}
										if(date("l") == "Tuesday" or date("l") == "Thursday"){
											if($date1 > $date6 and $date1 < $date7){
												return "green";
											}
											//need clarification on when this block starts and ends
											elseif($date1 > $date4 and $date1 < $date4){
												return "green";
											}
										}
										if(date("l") == "Wednesday"){
											if($date1 > $date4 and $date1 < $date5){
												return "green";
											}
										}
										if(date("l") == "Friday"){
											if($date1 > $date2 and $date1 < $date8){
												return "green";
											}
										}
										return "red";
									}

									if($professor == "Phillip East"){
										$current_time = date("g:i a");
										$start1 = "9:30 am";
										$end1 = "11:45 am";
										$start2 = "1:15 pm";
										$end2 = "4:00 pm";
										$end3 = "2:30 pm";
										$date1 = DateTime::createFromFormat('H:i a', $current_time);
										$date2 = DateTime::createFromFormat('H:i a', $start1);
										$date3 = DateTime::createFromFormat('H:i a', $end1);
										$date4 = DateTime::createFromFormat('H:i a', $start2);
										$date5 = DateTime::createFromFormat('H:i a', $end2);
										$date6 = DateTime::createFromFormat('H:i a', $end3);
										if (date("l") == "Monday" or date("l") == "Wednesday"){
											if ($date1 > $date2 && $date1 < $date3)
											{
											  return "green";
											}
											elseif ($date1 > $date4 && $date1 < $date5)
											{
												return "green";
											}
										}
										elseif (date("l") == "Friday"){
											if ($date1 > $date2 and $date1 < $date3)
											{
												return "green";
											}
											elseif ($date1 > $date4 and $date1 < $date6)
											{
												return "green";
											}
										}
										return "red";
									}

									if($professor == "Aleksandar Poleksic"){
										$current_time = date("g:i a");
										$start1 = "11:00 am";
										$end1 = "12:00 pm";
										$start2 = "2:00 pm";
										$end2 = "3:00 pm";
										$date1 = DateTime::createFromFormat('H:i a', $current_time);
										$date2 = DateTime::createFromFormat('H:i a', $start1);
										$date3 = DateTime::createFromFormat('H:i a', $end1);
										$date4 = DateTime::createFromFormat('H:i a', $start2);
										$date5 = DateTime::createFromFormat('H:i a', $end2);
										if (date("l") == "Tuesday" or date("l") == "Thursday"){
											if ($date1 > $date2 && $date1 < $date3)
											{
											  return "green";
											}
											elseif ($date1 > $date4 && $date1 < $date5)
											{
												return "green";
											}
										}
										elseif (date("l") == "Friday"){
											if ($date1 > $date4 and $date1 < $date5)
											{
												return "green";
											}
										}
										return "red";
									}

									if($professor == "J. Ben Schafer"){
										$current_time = date("g:i a");
										$start1 = "9:00 am";
										$end1 = "9:50 am";
										$start2 = "11:00 am";
										$end2 = "11:50 am";
										$start3 = "1:00 pm";
										$end3 = "1:50 pm";
										$date1 = DateTime::createFromFormat('H:i a', $current_time);
										$date2 = DateTime::createFromFormat('H:i a', $start1);
										$date3 = DateTime::createFromFormat('H:i a', $end1);
										$date4 = DateTime::createFromFormat('H:i a', $start2);
										$date5 = DateTime::createFromFormat('H:i a', $end2);
										$date6 = DateTime::createFromFormat('H:i a', $start3);
										$date7 = DateTime::createFromFormat('H:i a', $end3);
										if (date("l") == "Monday" or date("l") == "Wednesday" or date("l") == "Friday"){
											if ($date1 > $date2 && $date1 < $date3)
											{
											  return "green";
											}
											elseif ($date1 > $date4 && $date1 < $date5)
											{
												return "green";
											}
											elseif ($date1 > $date6 && $date1 < $date7)
											{
												return "green";
											}
										}
										return "red";
									}

									if($professor == "Eugene Wallingford"){
										return "yellow";
									}

									if($professor == "Andrew Berns"){
										return "yellow";
									}

									if($professor == "Mark Jacobson"){
										return "yellow";
									}

									if($professor == "Sam Barr"){
										return "yellow";
									}

									if($professor == "Mike Holmes"){
										return "yellow";
									}
								}

								function status ($status) {
									if($status == "green"){
										echo "<img src = professors/green.png> <br>";
									}
									elseif($status == "yellow"){
										echo "<img src = professors/yellow.png> <br>";
									}
									elseif($status == "red"){
										echo "<img src = professors/red.png> <br>";
									}
								}
								for($x = 0; $x < count($professors);$x++){
									if(file_exists("professors/".$picList[$x].".jpg")){
										echo "<img src = professors/" . $picList[$x] .".jpg>";
										$in = inOffice($professors[$x]);
										status($in);

									}
									else{
										echo "<img src = professors/NA.jpg>";
										$in = inOffice($professors[$x]);
										status($in);
									}
									echo "<h5>" . $professors[$x] . "</h5>". "<br><br>";
								}
								?>



				<!-- Assignments List -->
					</div>
				</div>
				
				<?php
					require_once('Functions/sideMenu.php')
				?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

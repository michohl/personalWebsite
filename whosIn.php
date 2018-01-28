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
								//ini_set('display_errors', '1');
								
								echo "<h2>Day is currently: " . date("l") . "</h2>";
								echo "<h2>Time is currently: " . date("g:i a") . "</h2>";
								echo "<h4>Legend: <br> Green light = currently in office <br> Yellow light = No office hours available <br> Red light = Not currently in office </h4>";
								echo "<br><br><br>";

								//Establish connection to database and query for all profs
								require_once('admin/config.php');
								$conn = new mysqli($loc,$user,$pass,$db);
								$profs = $conn->query("select Name,imagePath,schedule from Professors");
								while($row = $profs->fetch_assoc()){
									//Grab the profs office hours for the current day only
									$query = "select start,end from " . date("l") . " where prof='" . $row["Name"] . "'";
									$schedule = $conn->query($query);

									if($schedule === False){
										break;
									}
									//Add all office hour sessions to an array so we can compare to them later
									while($scheduleRow = $schedule->fetch_assoc()){
										$daySchedule[] = array($scheduleRow["start"],$scheduleRow["end"]);
									}

									//Display name and a link to the prof's schedule
									echo "Name: " . $row["Name"] . "<br/>";
									if($row["schedule"] != ""){
										echo "<a href = '" . $row["schedule"] . "'>Official Schedule</a><br/><br/>";
									}
									else{
										echo "This professor has no listed office hours <br/><br/>";
									}
									
									//Display prof's image if one exists
									if(file_exists($row["imagePath"])){
										echo '<img src="' . $row["imagePath"] . '">';
									}
									else{
										echo '<img src="assets/images/professors/NA.jpg">';
									}

									if($row["schedule"] != ""){
										//Here we actually decide if the prof is in the office or not
										$now = date("g:ia");
										$breakFlag = False;
										foreach($daySchedule as $session){
											/*
											If the current time is greater than the session start time
											and less than the end time then the professor should be 
											in their office.
											*/
											$start = ($now > $session[0]);
											$end = ($now < $session[1]);
											if($start && $end){
												echo '<img src="assets/images/professors/green.png">';
												$breakFlag = True;
											}
										}
										/*
										Getting here means that the professor has 
										office hours today but it's not at the current time 
										*/
										if($breakFlag == False){
											echo '<img src="assets/images/professors/red.png">';
										}
										
									}
									else{
										//Professor doesn't have office hours
										echo '<img src="assets/images/professors/yellow.png">';
									}

									echo "<br/><br/>";
									//This variable needs to be unset because otherwise the next
									//professor you look at will use the previous professors schedule if they don't have their own.
									unset($daySchedule);
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

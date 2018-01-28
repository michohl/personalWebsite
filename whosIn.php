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
								ini_set('display_errors', '1');

								echo "<h2>Day is currently: " . date("l") . "</h2>";
								echo "<h2>Time is currently: " . date("g:i a") . "</h2>";
								echo "<h4>Legend: <br> Green light = currently in office <br> Yellow light = No office hours available <br> Red light = Not currently in office </h4>";
								echo "<br><br><br>";

								require_once('admin/config.php');
								$conn = new mysqli($loc,$user,$pass,$db);
								$profs = $conn->query("select Name,imagePath,schedule from Professors");
								while($row = $profs->fetch_assoc()){
									//$query = "select start,end from " . date("l") . " where prof='" . $row["Name"] . "'";
									$query = "select start,end from " . "Monday" . " where prof='" . $row["Name"] . "'";
									$schedule = $conn->query($query);

									while($scheduleRow = $schedule->fetch_assoc()){
										$daySchedule[] = $scheduleRow;
									}
									echo "Name: " . $row["Name"] . "<br/>";
									echo "<a href = '" . $row["schedule"] . "'>Official Schedule</a><br/><br/>";

									if(file_exists($row["imagePath"])){
										echo '<img src="' . $row["imagePath"] . '">';
									}
									else{
										echo '<img src="assets/images/professors/NA.jpg">';
									}


									if($scheduleRow["num_rows"] != 0 && $row["schedule"] != ""){
										$temp = 0;
									}
									elseif($row["schedule"] === ""){
										echo '<img src="assets/images/professors/yellow.png">';
									}
									else{
										echo '<img src="assets/images/professors/red.png">';
									}

									echo "<br/><br/>";
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

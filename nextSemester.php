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
											<h1>Next Semester's Classes</></h1>

                      <!-- CODE STUFF HERE -->

											<form>
											Select a semester to view:
											<select name="mySelect" id="mySelect" onchange="test(this.value)">
												<option value = "0">Please make a selection</option>
												<option value = "1">Fall</option>
												<option value = "2">Spring</option>
												<option value = "3">Both</option>
											</select>
											<!--<br></br>-->
											<!--<input type="button" onclick="test(semester);" value= "View Classes">-->
											</form>

											<div id="display_here"></div>

											<!--
											<script>
											function test(userChoice)
											{
											var node = document.getElementById('display_here');
											for(i=0;i<userChoice;i++){
											  node.innerHTML = (i + "<br>");
											}
											}
											</script>
-->
									<div id="page-wrapper">

                    </header>
									</div>
								</section>

								<!--Using the XMLHttpRequest Object-->
								<!--https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest-->
								<button type="button" onclick="loadXMLDoc(document.getElementById('mySelect').value)">View Courses</button>
								<div id="demo">
								</div>

								<script>
								function loadXMLDoc(userChoice) {
								  var xhttp = new XMLHttpRequest();
								  xhttp.onreadystatechange = function() {
								    if (this.readyState == 4 && this.status == 200) {
								      document.getElementById("demo").innerHTML =
								      "<br>" + this.responseText;
								    }
								  };
									console.log(userChoice);
									if(userChoice === '1'){
									  xhttp.open("GET", "NextSemester/fall.txt", true);
									}
									if(userChoice === '2'){
								  	xhttp.open("GET", "NextSemester/spring.txt", true);
									}
									if(userChoice === '3'){
								  	xhttp.open("GET", "NextSemester/both.txt", true);
									}
									xhttp.send();
								}
								</script>



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

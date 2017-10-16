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
											<h1>Information Storage &<br />
											Retrieval</></h1>
										</header>
									<p>Information Storage and Retrieval went into detail about looking at collections of documents and deciding how to organize and return the most relevant options based on user queries. These assignments are programmed in python 2.7</p>
									</div>
								</section>



				<!-- Assignments List -->
							<ul>
								<li><a href="http://www.MichaelTimmer.me/SophmoreYear/cs3150/isrProg.zip">Assignment #1 (Generate List of Terms in Collection)</a></li>

								<li><a href="http://www.MichaelTimmer.me/SophmoreYear/cs3150/isrProg2.zip">Assignment #2 (Generate Postings List for Collection)</a></li>

								<li><a href="http://www.MichaelTimmer.me/SophmoreYear/cs3150/isr_final.zip">Final Project (Take query from user and return top 20 relevant documents)</a></li>
							</ul>
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

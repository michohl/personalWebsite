<head>
	<title>Test</title>
</head>

<body>
	<h1>This page will display $_GET data pased through the URL</h1>
	<h3>Your current url provides the following array</h3>
	<?php
		print_r($_GET);
	?>
	
	<h3>Array formatted</h3>
	<?php
		foreach($_GET as $key => $value){
			echo $key . " -> " . $value . "<br/>";
		}	
	?>
</body>


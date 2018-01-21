<?php
    //This is where the database info is stored
    require_once("admin/config.php");

	//establish connection to the professors part of the UNI CS website.
	$url = 'http://cs.uni.edu/faculty_staff.php';    
    $doc = new DOMDocument($url);
    $doc->loadHTMLFile($url);

    //The b tags contain all of the professor's names so we'll filter for those.
    $profs = $doc->getElementsByTagName('b');

    //Connect to the database we will add profs to
    $conn = new mysqli($loc,$user,$pass,$db);

    //For each b filter print the name of the professor which is in the index "textContent"
    foreach($profs as $prof){
        //Grab the current professor, remove whitespace, and escape single quotes with a backslash so Mysql doesn't break.
        $current = trim($prof->textContent);
        $formatted = str_replace("'","\'",$current);

        $sql = "INSERT INTO Professors(Name) VALUES('" . $formatted . "')";
        if ($conn->query($sql) !== TRUE){
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
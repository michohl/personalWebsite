<?php
	//establish connection to the site we want to rip data from.
	$url = 'http://www.cfschools.org/schools/southdale';
	$data = file_get_contents($url);
	
	//(.*?) is regex to act as an anchor. It searches for any text that begins with the left and ends with the right.
	//regex components have to start and end with forward slashes.
	$regex = '/<strong>Day (.*?)</';
	//compare your $regex query with the contents of $data then store that into $match (match is an array)

	preg_match($regex,$data,$match);

	//var_dump($match); //this line dumps the entire array so you can see what matches you got from the previous preg_match
	echo $match[1];
?>

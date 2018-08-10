<?php

if (isset($_POST['submit'])){

	// Get Variable Input
	$name = $_POST['name'];
	$site = $_POST['site'];
	$description = $_POST['description'];
	$image = $_POST['image'];

	$j_str = file_get_contents('sites.json');// Getting JSON file
	$json = json_decode($j_str, true);// Decode

	// Create array from input
	$siteObj = array(
		'name' => $name,
		'site' => $site,
		'description' => $description,
		'image' => $image
	);

	array_push($json['sites'], $siteObj); // push changes into JSON array

	$j_out = json_encode($json); // Encode as JSON

	// Write the changes to file
	$fout = fopen('sites.json', 'w');
	fwrite($fout, $j_out);
	fclose($fout);

}

?>
<?php

if (isset($_POST['submit'])){

	// Get Variable Input
	$name = $_POST['name'];
	$description = $_POST['description'];
	$language = $_POST['language'];
	$body = $_POST['body'];

	$j_str = file_get_contents('data/snippets.json');// Getting JSON file
	$json = json_decode($j_str, true);// Decode

	// Create array from input
	$snippetObj = array(
		'name' => $name,
		'description' => $description,
		'language' => $language,
		'body' => $body
	);

	array_push($json['snippets'], $snippetObj); // push changes into JSON array

	$j_out = json_encode($json); // Encode as JSON

	// Write the changes to file
	$fout = fopen('data/snippets.json', 'w');
	fwrite($fout, $j_out);
	fclose($fout);
}

?>
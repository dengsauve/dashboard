<?php

if (isset($_POST['submit'])){

	// Get Variable Input
	$name = $_POST['name'];
	$site = $_POST['site'];
    $description = $_POST['tags'];
    
    $image = file_get_contents($site);

    $ext = end(explode(".", $site));

    file_put_contents('./memes/' . $name . '.' . $ext, $image); //Where to save the image on your server
}

?>
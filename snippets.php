<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>Dennis' Code Snippets</title>
		<meta name="description" content="A collection of useful code snippets"/>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="style/style.css" />
	</head>
	<body>
		<div class="container">
			
		<?php require('include/menu.php'); ?>

			<?php
				$j_str = file_get_contents('data/sites.json');// Getting JSON file
				$json = json_decode($j_str, true);// Decode
				$snippets = $json['snippets'];

				foreach($snippets as $snippet)
				{
					echo "hi";
					var_dump($snippet);
				}
			?>
			
		</div>

		<?php require('include/footer.php'); ?>
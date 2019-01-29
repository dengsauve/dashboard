<?php
	include('include/newMemeLogic.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>Dennis' Meme Vault</title>
		<meta name="description" content="The Dankest Meme Stash"/>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="style/style.css" />
	</head>
	<body>
		<div class="container">
			
		<?php require('include/menu.php'); ?>

			<?php 
				include('include/newMeme.php');
				
				$image_paths = scandir("memes", 1);
				echo "<div class='row'>";
				foreach($image_paths as $key=>$image_path){
					if($key % 3 == 0 && $key !=0){
						echo "</div><div class='row'>";
					}
					echo "<div class='col-4 img-frame'>";
					echo "<img class='img-responsive' src='/memes/$image_path' onerror='this.style.display = \"none\"' />";
					echo "</div>";
				}
				echo "</div>";
			?>

		</div>

		<?php require('include/footer.php'); ?>
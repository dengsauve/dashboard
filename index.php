<?php
	require('include/authenticate.php');
	include('include/newSiteLogic.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Dennis' Dash</title>
		<meta name="description" content="A list of useful links and tools."/>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="style/style.css" />
		<link rel="stylesheet" href="style/tile.css" />
	</head>
	<body>
		<div class="container">

			<div class="row">
				<a href="/" class="h1 col-6">Dashboard</a>
				<div class="col-6 text-right">
					<a href="/vault.php" class="btn btn-secondary" roll="button">meme vault</a>
					<a href="/tools.php" class="btn btn-secondary" roll="button">tools</a>
					<a href="/?logout=true" class="btn btn-secondary" roll="button">logout</a>
				</div>
			</div>

            <?php
                include('include/newSite.php');
            ?>

            <input type="text" id="siteSearch" class="form-control" />

            <br/><br/>

            <div id="sites">
                <?php
                    include('include/siteCards.php');
			    ?>
            </div>

		</div>

		<!-- Footer JavaScripts -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="scripts/script.js"></script>
	</body>
</html>

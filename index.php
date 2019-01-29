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

			<?php require('include/menu.php'); ?>

            <?php include('include/newSite.php'); ?>

            <input type="text" id="siteSearch" class="form-control" />

            <br/><br/>

            <div id="sites">
                <?php include('include/siteCards.php'); ?>
            </div>

		</div>

		<?php require('include/footer.php'); ?>

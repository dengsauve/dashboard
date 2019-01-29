<?php
	include('include/newMemeLogic.php');
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
	</head>
	<body>
		<div class="container">
			
		<?php require('include/menu.php'); ?>

			<div class="row">
                <div class="col-12">
                    <h2>Epoch to Datetime</h2>
                    <hr/>
                    <input type="text" id="epochIn" placeholder="Epoch In" class="form-control"/>
                    <h3 id="epochOut">Epoch Out</h3>
                </div>
				<div class="col-12">
					<h2>Commenter</h2>
					<hr/>
                    <input type="text" id="commentIn" placeholder="Comment" class="form-control"/>
					<div class="commentText">
						<p id="commentHtmlOut">HTML Comment Out</p>
						<p id="commentCssOut">CSS Comment Out</p>
						<p id="commentHashOut">Hash Comment Out</p>
					</div>
				</div>
            </div>
		</div>

		<?php require('include/footer.php'); ?>
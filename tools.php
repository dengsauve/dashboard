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
			
			<div class="row">
				<a href="/tools.php" class="h1 col-6">Tools</a>
				<div class="col-6 text-right">
                    <a href="/" class="btn btn-secondary" roll="button">dashboard</a>
                    <a href="/vault.php" class="btn btn-secondary" roll="button">meme vault</a>
					<a href="/?logout=true" class="btn btn-secondary" roll="button">logout</a>
				</div>	
			</div>

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

		<!-- Footer JavaScripts -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="scripts/script.js"></script>
    </body>
</html>

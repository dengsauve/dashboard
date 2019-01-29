<?php
	require('include/newSnippetLogic.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>Dennis' Code Snippets</title>
		<meta name="description" content="A collection of useful code snippets"/>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="style/prism.css" />
		<link rel="stylesheet" href="style/style.css" />
	</head>
	<body>
		<div class="container">
			
			<?php require('include/menu.php'); ?>

			<?php require('include/newSnippet.php'); ?>

			<div class="row">
				<!-- Button trigger modal -->
				<div class="col-12">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Add Snippet
					</button>
				</div>
			</div>
			<br/>

			<?php require('include/snippetBlocks.php'); ?>
			
		</div>

	<?php require('include/footer.php'); ?>
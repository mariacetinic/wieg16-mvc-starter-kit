<?php
/* @var $recipes */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Hungrig?</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/app.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Startsida</a>
			<ul class="nav navbar-nav">
            	<li><a href="http://mvc-app.dev/create">Lägg till recept</a></li>
        	</ul>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			
		</div><!--/.navbar-collapse -->
	</div>	
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<h1>Hungrig?</h1>
		<p>Letar du efter recept? Då har du allt kommit rätt. Här finns recept för alla typer.
		Gillar du inte det som erbjuds? Vilken tur att du har möjligheten att lägga upp ditt 
		allra egna recept. Tryck nedan på knappen för att lägga till nya recept eller scrolla ned för att se redan tillagda.
		Smaklig måltid!</p>
		<p><a class="btn btn-primary btn-lg" href="http://mvc-app.dev/create" target="_blank" role="button">Lägg till recept &raquo;</a></p>
	</div>
</div>

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Recept</th>
                    <th>Antal</th>
                    <th>Svårighetsgrad</th>
                    <th>Redigera / Ta bort</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($recipes as $recipe): ?>
                    <tr>
                        <td><?= $recipe['name'] ?></td>
                        <td><?= $recipe['quantity'] ?></td>
                        <td><?= $recipe['recipe_difficulty'] ?></td>
                        <td>
                            <a href="/edit?id=<?= $recipe['id'] ?>" title="Redigera"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="/delete-recipe?id=<?= $recipe['id'] ?>" title="Ta bort"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
	</div>

	<hr>

	<footer>
		<p>&copy; 2016 Company, Inc.</p>
	</footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/vendor/jquery-3.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
</body>
</html>

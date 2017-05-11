<?php
/* @var $recipes */
include 'header.php'; //visar header och menyn

?>




<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<h1>Hungrig?</h1>
		<p>Letar du efter recept? Då har du allt kommit rätt. Här finns recept för alla typer.
		Gillar du inte det som erbjuds? Vilken tur att du har möjligheten att lägga upp ditt 
		allra egna recept. Tryck nedan på knappen för att lägga till nya recept eller scrolla ned för att se redan tillagda.
		<small>För dig som vill redigera ett recept kan du enkel göra det genom att trycka på knappen nedan.</small>
            Smaklig måltid!</p>
		<p>
            <a class="btn btn-primary btn-lg" href="http://mvc-app.dev/create" target="_blank" role="button">Lägg till recept &raquo;</a>
            <a class="btn btn-primary btn-lg" href="http://mvc-app.dev/edit" target="_blank" role="button">Uppdatera recept &raquo;</a>
        </p>

    </div>
</div>

<div class="container">

	<div class="row">
        <div class="col-md-12">
            <!-- Tabell som visar alla recept -->
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


<?php
include 'footer.php'; //visar footern
?>
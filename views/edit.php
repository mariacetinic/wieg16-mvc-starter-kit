<?php
/* @var $recipe */
include 'header.php' //visar header och menyn
?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Här uppdateras: </h1>
        <p>Välkommen! Älskar du att dela med dig?  Här har du möjlighet till att lägga till vilket recept du vill. Nedanför får du fylla i allt
            du behöver fylla i. Kör ba kör!</p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">

        <div class="col-md-6">

            <h2>Uppdatera receptet här</h2>
            <!-- Receptformuläret -->
            <form action="/edit-recipe" method="post">
                <input type="hidden" name="id" value="<?= $recipe['id'] //<?= betyder echo ?>">
                <div class="form-group">
                    <label>Namn:</label>
                    <input type="text" name="name" class="form-control" value="<?= $recipe['name'] ?>">
                </div>
                <div class="form-group">
                    <label>Antal: </label>
                    <input type="text" name="quantity" class="form-control" value="<?= $recipe['quantity'] ?>">
                </div>
                <div class="form-group">
                    <label>Svårighetsgrad: </label>
                    <input type="text" name="recipe_difficulty" class="form-control" value="<?= $recipe['recipe_difficulty'] ?>">
                </div>
                <button type="submit" class="btn btn-default">Uppdatera</button>
            </form>
        </div>


        <div class="col-md-6">

        </div>
    </div>
</div>


<?php
include 'footer.php'; //visar footern
?>
<?php
require 'header.php' //visar header och menyn
?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Här lägger du till recept!</h1>
        <p>Välkommen! Älskar du att dela med dig?  Här har du möjlighet till att lägga till vilket recept du vill. Nedanför får du fylla i allt
        du behöver fylla i. Kör ba kör!</p>
    </div>
</div>

<div class="container">

    <div class="row">

        <div class="col-md-5 col-md-pull-0">

            <h2>Lägg till recept här</h2>
            <!-- Receptformuläret -->
            <form action="/create-recipe" method="post">
                <div class="form-group">
                    <label>Namn:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Antal: </label>
                    <input type="text" name="quantity" class="form-control">
                </div>
                <div class="form-group">
                    <label>Svårighetsgrad: </label>
                    <input type="text" name="recipe_difficulty" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Lägg till</button>
            </form>
        </div>
    </div>

<?php
require 'footer.php'; //visar footern
?>
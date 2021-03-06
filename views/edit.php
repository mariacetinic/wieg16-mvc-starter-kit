<?php
/* @var $recipe */
require 'header.php' //visar header och menyn
?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Här uppdateras: <?= $recipe['name'] ?></h1>
        <p>Välkommen! Älskar du att dela med dig?  Här har du möjlighet till att lägga till vilket recept du vill. Nedanför får du fylla i allt
            du behöver fylla i. Kör ba kör!</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <h2>Uppdatera receptet här</h2>
            <!-- Forumulär till uppdatering av recept -->
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
            <img src="/images/update-image.jpg" class="img-responsive">  <!--Front-end ser publicmappen som sin webbrot. Därför behövs det inte skriva ../public... innan images/.. -->
       <!-- sårbart om du inte sätter "/" framför images -->
        </div>

    </div>
</div>


<?php
require 'footer.php'; //visar footern
?>
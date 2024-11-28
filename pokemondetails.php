<?php
// haalt de pokemon id op van de url parameter
$pokemonId = $_GET['id'];

// Dit zorgt ervoor dat je de variabelen van $pokemondata in dit bestand kunt ophalen.
// Zoals de variabele $pokemonInfo die staat in de bestand $pokemondata.php.

include 'data/pokemondata.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/pokemondetails.css">
        <link rel="stylesheet" href="styles/application.css">
        <title><?php echo $pokemonInfo[$pokemonId]['officialName']; ?> Details</title>
    </head>
    <body>
        <a href="startpagina.php" class="button">Startpagina</a>
        <a href="pokemonlijst.php" class="button">Lijstpagina</a>

        <h1 style="text-align: center">Pokemon details</h1>
        <div class="card">
            <img src="images/<?php echo $pokemonInfo[$pokemonId]['image']; ?>" width="280" height="200" />
            <h2><?php echo $pokemonInfo[$pokemonId]['officialName']; ?></h2>
            <p>Type: <?php echo $pokemonInfo[$pokemonId]['type']; ?></p>
            <p>Evolutions: <?php echo $pokemonInfo[$pokemonId]['evolutions']; ?></p>
            <p>Region: <?php echo $pokemonInfo[$pokemonId]['region']; ?></p>
            <p>Weaknesses: <?php echo $pokemonInfo[$pokemonId]['weaknesses']; ?></p>
        </div>
    </body>
</html>

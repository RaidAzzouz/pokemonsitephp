<?php
include 'data/pokemondata.php';

function getRandomPokemon($pokemondata) {
    $randomId = array_rand($pokemondata);
    return $pokemondata[$randomId];
}

$randomPokemon = getRandomPokemon($pokemonInfo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/startpagina.css">
    <link rel="stylesheet" href="styles/application.css">
    <title>Pokémon Website</title>
</head>
<body>
    <h1 style="text-align: center">Pokenet</h1>
    <p style="text-align: center">Alle pokemon informatie staat hier!</p>

    <div class="card-container">
        <a href="pokemondetails.php?id=<?php echo array_search($randomPokemon, $pokemonInfo); ?>" class="card">
            <h1>Pokemon van de dag</h1>
            <img src="images/<?php echo $randomPokemon['image']; ?>" width="280" height="200" />
            <h2 style="text-align: center"><?php echo $randomPokemon['officialName']; ?></h2>
        </a>
    </div>

    <div class="button-container">
        <a href="pokemonlijst.php" class="button">Pokémon List</a>
    </div>

</body>
</html>
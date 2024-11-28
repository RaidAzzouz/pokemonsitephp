<?php


include 'data/pokemondata.php';

// array_keys is een helper methode om alle keys van een array op te halen
$pokemonList =  array_keys($pokemonInfo);

function searchPokemonByName($name, $pokemondata) {
    $foundPokemon = array();

    foreach ($pokemondata as $id => $pokemon) {
        if (stripos($pokemon['officialName'], $name) !== false) {
            $foundPokemon[$id] = $pokemon;
        }
    }

    return $foundPokemon;
}

if (isset($_GET['searchTerm'])) {
    $searchTerm = $_GET['searchTerm'];
    $foundPokemon = searchPokemonByName($searchTerm, $pokemonInfo);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/pokemonlijst.css">
        <link rel="stylesheet" href="styles/application.css">
        <title>Pokémon List</title>
    </head>
    <body>
        <a href="startpagina.php" class="button">Startpagina</a>

        <h2 style="text-align: center">Pokémon List</h2>

        <div class="searchbar">
            <form method="get">
                <p for="searchTerm">Search Pokémon:</p>
                <input type="text" id="searchTerm" name="searchTerm">
                <button type="submit">Search</button>
            </form>
        </div>


        <div class="card">
            <ul>
                <?php
//                isset is een helper methode om te checken of de variabele een waarde heeft of niet
                if (isset($foundPokemon)) {

                    foreach ($foundPokemon as $id => $pokemon) {
                        echo "<li><a href='pokemondetails.php?id=$id'>{$pokemon['officialName']}</a></li>";
                    }
                } else {

                    foreach ($pokemonList as $pokemonId) {
                        echo "<li><a href='pokemondetails.php?id=$pokemonId'>{$pokemonInfo[$pokemonId]['officialName']}</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
    </body>
</html>
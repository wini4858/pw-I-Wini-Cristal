<?php
$pokemon = array(
    "Pikachu",
    "Bulbasauro",
    "Squirtle",
    "Charmander",
    "Eeves",
);
    foreach ($pokemon as $pokemon) {
        if ($pokemon !== "Charmander"){
                echo $pokemon. "<br>";
        }
    }
?>
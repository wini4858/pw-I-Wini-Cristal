<?php
    for ($x = 0; $x <= 10; $x++){
        echo "Número: $x <br>";
    }
    $pokemon = array(
        "Pikachu",
        "Bulbasauro",
        "Squirtle",
        "Charmander",
        "Eeves",
    );
   
    echo count($pokemon);
    echo "<br>";

    for ($x = 0; $x < count($pokemon); $x++) {
        echo $pokemon[$x], "<br>";
    }
       
    
?>
<?php
    $inicio = 25;
    $fim = 60;

        for ($i = $inicio; $i <= $fim; $i++) {
            if ($i % 2 == 0) {
                echo "$i é par <br>" . PHP_EOL;
            } else {
                echo "$i é ímpar <br>" . PHP_EOL;
            }
        }
        
?>
<?php
    $numbers = [26, 6, 35, 93, 291, 63];
    $maiorNumero = $numbers[0];
    
    // Iteração para comparar e encontrar o maior número
        foreach ($numbers as $number) {
            if ($number > $maiorNumero) {
                $maiorNumero = $number;
            }
        }
    echo "O maior numero e: $maiorNumero";
?>

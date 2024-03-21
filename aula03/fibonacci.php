<?php

    $n1 = 0;
    $n2 = 1;
    // Imprimindo os primeiros dois num
    echo $n1 . " " . $n2 . " ";

    $count = 2;

        // Loop para imprimir os proximos 8 num
        while ($count < 10) {
            $n3 = $n1 + $n2;
            echo $n3 . " ";
            
            $n1 = $n2;
            $n2 = $n3;
            $count++;
        }
?><br><br>

<?php
    // 2ºforma de fazer
    $n1 = 0;
    $n2 = 1;

    echo $n1 . " " . $n2 . " ";

            for ($i = 2; $i < 10; $i++) {
                $n3 = $n1 + $n2;
                echo $n3 . " ";
            
                $n1 = $n2;
                $n2 = $n3;
            }
?>
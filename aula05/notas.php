<?php
    function notas($f1, $f2) {
        $nota = ($f1 + $f2) / 2;
        if($nota >= 6) {
            echo "Aluno aprovado";
        }
        else if($nota >= 4) {
            echo "Aluno em recuperação";
        }
        else {
            echo "Aluno reprovado";
        }

        echo "<br>";
    }

    notas(4, 6);
    notas(2, 1);
    notas(10, 8);
?>
<?php
    function nota($n1, $n2) {
        $result = ($n1 + $n2) / 2;
        if($result >= 6) {
            echo "Aluno Aprovado (ﾉ◕ヮ◕)ﾉ*:･ﾟ✧";
        }
        else if($result >= 4) {
            echo "Aluno em Recuperação ╮(─▽─)╭";
        }
        else {
            echo "Aluno Reprovado ლ(ﾟдﾟლ)";
        }

        echo "<br>";
    }

    echo "<b>Nota Final:",nota($_POST["num1"], $_POST["num2"]);
?>
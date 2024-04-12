<?php
    function some($num1, $num2){
        $soma = $num1 + $num2;
        if ($soma < 0){
            echo "0";
        }
        else{
            echo"$num1 + $num2 = $soma <br>";
        }
    }
    some(3, 5);
    some(15, -7);
?>
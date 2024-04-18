
<?php
    function some($num1 = 0, $num2 = 0){
        $resul = $num1 + $num2;
        if ($resul < 0){
            $resul = 0;
        }
        
            echo"$num1 + $num2 = $resul <br>";
        }
    
        echo "<b>Resultado ʕ•́ᴥ•̀ʔっ:",some($_POST["num1"], $_POST["num2"]);
?>


<?php
    function contaPrimos($num1, $num2) {
        $numeros = array();
        $primos = 0;
        for($i = $num1; $i <= $num2; $i++) {
            $divisores = 0;
            for($c = 1; $c <= $i; $c++) {
                if($i % $c == 0) {
                    $divisores++;
                }
            }
            if($divisores == 2) {
                $primos++;
                array_push($numeros, $i);
            }
        }
        echo "Existem $primos números primos entre $num1 e $num2 <br>";
        foreach($numeros as $numero) {
            echo "$numero ";
        }
    }
    echo "<b>Resultado (ﾉಥ益ಥ）ﾉ ┻━┻:",contaPrimos($_POST["num1"], $_POST["num2"]);
?><?php echo "<br><br> Fiz no meu dia mais lerdo kkkk foi sofrido para mim entender o que eu tava fazendo nunca mais falto na sua aula o(╥﹏╥)o " ?>
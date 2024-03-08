<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $peso = 80;
    $altura = 1.65;
    $imc = $peso / ($altura * $altura);

    if ($imc<18.5){
        echo "imc: Abaixo do peso";
    }

    else if ($imc>=18.5 && $imc <24.9){
        echo "imc: Peso normal";
    }

    else if ($imc>=24.9 && $imc <29.9){
        echo "imc: sobrepeso";
    }

    else if ($imc>=29.9 && $imc <39.9){
        echo "imc: obesidade";
    }

    else{
        echo "imc: obesidade grave";
    }

    echo "<br/> $imc";

    ?>
</body>
</html>
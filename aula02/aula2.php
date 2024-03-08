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
    $imc = $peso / pow($altura, 2);

    switch($imc) {
        case $imc < 18.5:
            $classificacao = "Magreza";
            break;
        case $imc < 25:
            $classificacao = "Normal";
            break;
        case $imc < 30:
            $classificacao = "Sobrepeso";
            $obesidade = "Grau I";
            break;
        case $imc < 40:
            $classificacao = "Obesidade";
            $obesidade = "Grau II";
            break;
        default:
            $classificacao = "Obsesidade Grave";
            $obesidade = "Grau III";
            break;
    }


    echo "<br /><p>Classificação: $classificacao</p>";
    if($imc > 29.9) {
        echo "<p>Obesidade: $obesidade</p>";
    }

    ?>
</body>
</html>
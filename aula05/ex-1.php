<html>
    <body>
        <form>
            <label for="num1">Primeiro número: </label> <input type="number" name="num1"><br>
            <label for="num2">Segundo número: </label> <input type="number" name="num2"><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
function soma($num1 = 0, $num2 = 0){
    $result = $num1 + $num2;
    if($result < 0){
        $result = 0;
    }
    echo "$num1 + $num2 = $result";
}?>

A soma é <?php soma($_POST["num1"], $_POST["num2"]); ?><br>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efetua o calculo e exibe a soma</title>
    <style>
        *{
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            background: #000000;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    
        echo "<h3>EFETUA O CÁLCULO E EXIBE  SOMA DE 2 NÚMEROS XD</h3>";
        // recuperando os valores informado nas caisa num1 e num2 

        $numero1 = $_GET["num1"];
        $numero2 = $_GET["num2"];
        $soma = $numero1 + $numero2;
        echo "Número 1: ". $numero1;
        echo "<br> Número 2: ". $numero2;
        echo "<br> A soma é: ". $soma;
    
    ?>
</body>
</html>
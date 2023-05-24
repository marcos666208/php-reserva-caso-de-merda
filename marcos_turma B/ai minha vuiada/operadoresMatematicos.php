<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos em PHP</title>
</head>
<bo bgcolor= "aquamarine">
<?php
        echo "<h3>OPERADORES MATEMATICOS EM PHP</H3>";
        $valor1 = 12; //variável tipo inteiro
        $valor2 = 13; //variavel tipo inteiro
        $adicao = $valor1 + $valor2;
        $subtracao = $valor1 - $valor2;
        $multiplicacao = $valor1 * $valor2;
        $divisao = $valor1 / $valor2;

        echo "<strong>Valor1: </strong>". $valor1;
        echo "<br><strong>Valor2: </strong>". $valor2;

        echo "<h4>Calculo do operador matemático soma</h4>";
        echo "<hr align='left' color='#0000ff' width='350' size=3>";
        echo "A soma do $valor1 e $valor2 é $adicao";

        echo "<h4>Calculo do operador matemático subtração</h4>";
        echo "<hr align='left' color='#0000ff' width='350' size=3>";
        echo "A subtração do $valor1 e $valor2 é $subtracao";

        echo "<h4>Calculo do operador matemático multiplicação</h4>";
        echo "<hr align='left' color='#0000ff' width='350' size=3>";
        echo "A multiplicação do $valor1 e $valor2 é $multiplicacao";

        echo "<h4>Calculo do operador matemático divisão</h4>";
        echo "<hr align='left' color='#0000ff' width='350' size=3>";
        echo "A divisão do $valor1 e $valor2 é $divisao";

        echo "<h4>Exibindo tipo de variável</h4>";
        echo var_dump($valor1) . "-<em>Variável valor1 do tipo inteiro</em><br>"; //exibe o tipo de variável nesse caso tipo inteiro 
        echo var_dump($valor2) . "-<em>Variável valor2 do tipo inteiro</em><br>";
?>
</bo
</html>

php_logo_guid=¨wwww.;~´
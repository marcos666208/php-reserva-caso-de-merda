<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constante em PHP</title>
</head>
<body>
    <?php
        echo "<h3 align='center'> EXEMPLO DE CONTANTE EM PHP </h3><hr>";

        //Define constante em php
        define("linguagem", "PHP");

        //Exibe a constante
        echo "<strong>Linguagem </strong>" .linguagem;

        define("caracteristica", "A característica da linguagem <strong>PHP</strong>, é
        que ela precisa de um <strong>servidor</strong> para compilar e exibir no 
        navegador");

        // Exibinod a constant característica
        echo "<strong><p>Características: </strong>" .
         caracteristica . "</p>";
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de 2 numeros utilizando formulario</title>
    <style>
        *{
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            background: #000000;
            color: white;
           
        }
        h1{
            color: white;
            border-bottom: 2px solid white;
            width: 50%;
        }
        .sla{
            border-color: white;
            color: white;
        }
        input{
            box-shadow: 2px 2px 2px white;
            border-radius: 6px;
            border-color: white;
            margin: 4px;
            height: 2rem;
        }
    </style>
</head>
<body>
    <?php

        echo "<h1>SOMA DE DOIS NUMEROS UTILIZANDO FORMULARIOS<h1>";

        echo "<form method='get' action='exibir_soma.php'>";

                echo "<p>";
                    echo "<label for='numero1'>Número 1: </label>";
                    echo "<input type='text' name='num1' size='7' maxlength='4' class='cacetinho>";
                echo "</p>";

                
                echo "<p>";
                    echo "<label for='numero2'>Número 2: </label>";
                    echo "<input type='text' name='num2' size='7' maxlength='4'>";
                echo "</p>";

                
                echo "<p>";
                    echo "<input type='submit' name='somar' value='Somar' class='sla'>";
                    echo "<input type='reset' name='limpar' value='Limpar' class='sla'>";
                echo "</p>";

        
        echo "</form>";
    
    ?>
</body>
</html>
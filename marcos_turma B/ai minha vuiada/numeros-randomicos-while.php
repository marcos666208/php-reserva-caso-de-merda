<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

    </style>
</head>
<body>
    <?php
        echo "<h2>NUMEROS RANDOMICOS COM WHILE</h2>";
        $numero = 0;
        $cont = 1;
        while($cont < 20){
        $numero = rand(1, 200);
        echo "Este e o nº". $numero ."<br>";
        $cont ++;
        if($numero == 50)
        {
            echo "<p>Looping interrompido</p>";
            break;
        }
    }
    ?>
</body>
</html>
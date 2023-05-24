<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <style>

         fieldset{
              text-align:center;
              width: 10%;
              background: black;
              color: white;
              border-radius: 15px;
              margin-left: 43%;
              
         }
         div{
          width: 100%;
         }
         .botao{
               align: center;
         }
         .um{
          text-align: center;



    </style>
</head>
<body>
    <?php
     echo "<body bgcolor='#D3D3D3'></body>";
    echo "<center><h1>Controle de Gastos</h1></center>";
    echo "<form name='controle' method='post' action='resultadoCalculo.php'>";
echo "<fieldset>";
          echo "<div>";
    echo "<h3>Receitas</h3>";
    echo "<hr align='center' color='white' width='250' size=3>";
          echo "</div>";
         
    echo "<p>";
        echo "<label for='receita1'>Receita 1:</label>";
        echo "<input type='text' name='re1' size=4 maxlength=4 required>";
    echo "</p>";

    echo "<div>";
    echo "<p>";
        echo "<label for='receita2'>Receita 2:</label>";
        echo "<input type='text' name='re2' size=4 maxlength=4 required>";
    echo "</p>";
    echo "<hr align='center' color='white' width='250' size=3>";
    echo "</div>";

    echo "<h3>Despesas</h3>";
    echo "<p>";
         echo "<label for='despesa1'>Despesa 1:</label>";
         echo "<input type='text' name='des1' size=4 maxlength=4 required>";
    echo "</p>";

    echo "<p>";
         echo "<label for='despesa2'>Despesa 2:</label>";
         echo "<input type='text' name='des2' size=4 maxlength=4 required>";
    echo "</p>";

    echo "<p>";
         echo "<label for='despesa3'>Despesa 3:</label>";
         echo "<input type='text' name='des3' size=4 maxlength=4 required>";
    echo "</p>";

    echo "<p>";
         echo "<label for='despesa4'>Despesa 4:</label>";
         echo "<input type='text' name='des4' size=4 maxlength=4 required>";
    echo "</p>";

    echo "<p>";
         echo "<label for='despesa5'>Despesa 5:</label>";
         echo "<input type='text' name='des5' size=4 maxlength=4 required>";
    echo "</p>";

    echo "<div>";
    echo "<p>";
         echo "<label for='despesa6'>Despesa 6:</label>";
         echo "<input type='text' name='des6' size=4 maxlength=4 required>";
    echo "</p>";
    echo "<hr align='center' color='white' width='250' size=3>";
    echo "</div>";

     echo "<div class ='um'>";
    echo "<p>";
        echo "<input type='submit' value='Calcular' name='Calcular'>";
    echo "</p>";
    echo "<hr align='center' color='black' width='250' size=3>";
    echo "</div>";

    echo "</fieldset>";
    ?>
</body>
</html>
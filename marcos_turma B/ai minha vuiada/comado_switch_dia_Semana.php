<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando switch dia da semana</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        body{
            background: rgb(201, 201, 201);
            

        }

        .titulo{
            
            background: white;
            text-align: center;
        
        }
        
        .titulo2{
            margin: 10px;
        }
        marquee{
            width: 300px;
            font-size: 26px;
            font-weight: 700;
            font-style: italic;
            background-color: white;
            border: 2px solid black;
            border-radius: 11px;
        }

        .title3{
            margin: 10px;
        }
    </style>
</head>
<body>
    <?php
        echo "<h2 class='titulo'>Dia da Semana - Switch... Case</h2>";
        $numero_Dia_Semana = date("w");
        echo "<p class='titulo2'><strong>Dia da semana: </strong>$numero_Dia_Semana</p>";
        
        $Dia_Semana_Extenso="";
        switch ($numero_Dia_Semana)
        {
            Case 0:
             $Dia_Semana_Extenso = "Domingo";
            break;

            Case1:
             $Dia_Semana_Extenso = "Segunda" ;
            break;

            Case2:
              $Dia_Semana_Extenso = "Terça";
            break;

            Case3:
             $Dia_Semana_Extenso = "Quarta" ;
            break;

            Case4:
              $Dia_Semana_Extenso = "Quinta";
            break;

            Case5:
               $Dia_Semana_Extenso = "Sexta" ;
            break;

            Case6:
              $Dia_Semana_Extenso = "Sábado";
            break;

            deafult:
               $Dia_Semana_Extenso = "ERRO... DIA DA SEMANA INVALIDO!!!!";
            break;
        }
            echo  "<p>Hoje é: </p>$Dia_Semana_Extenso";
            echo "<p><marquee direction='left'>Dia de </marquee></p>";
    
    ?>
</body>
</html>
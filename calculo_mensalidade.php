<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Mensalidade</title>
</head>
<body bgcolor=#B0E0E6>
    <?php

        echo "<h3><b>CALCULO DE MENSALIDADE</b></h3>";
        echo "<hr align='left' color='#DC143C' width='350' size=3>";

        $nome = "Marcos Alexandre";
        $vcurso = 1519.90;
        $ano = 2023;
        $parcelas = 10;
        $mensalidade = $vcurso/$parcelas;

        echo "<b>Nome do Aluno............: </b>" ."<b><i>$nome</b></i>";
        echo "<br><b>Valor do Curso............: </b>" ."R$ $vcurso";
        echo "<br><b>Ano...............................: </b>" .$ano;
        echo "<br><b>Qtde de Parcelas.........: </b>" .$parcelas;
        echo "<br><b><u>Valor da Mensalidade: </u></b>"  ."R$ $mensalidade";

        echo "<h3><b><u>TIPOS DE VARIÁVEIS UTILIZADOS </u></b></h3>";

        echo var_dump($nome );
        echo var_dump($vcurso);
        echo var_dump($ano);
        echo var_dump($parcelas);

    ?>
</body>
</html>
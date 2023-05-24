<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <?php

    session_start();
    echo "<h3>EXIBE OS DADOS SALVOS NA SESSAO</h3>";

    $nome  = $_SESSION["nome"];
    $email = $_SESSION["email"];

    echo "<strong>Nome: </strong>" .$nome;
    echo "<br><strong>Email: </strong>" .$email;

    ?>
    <p><a href="index.php"></a></p>

</body>
</html>
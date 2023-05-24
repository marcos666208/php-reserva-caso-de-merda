<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença entre as funções Require e Include </title>
</head>
<body>
    <?php    

    include "cabeca.php";

    require "rodape.php";

    ?>
    <form name="string" method ="post" action="";>
        <p>

            <label for="nome">Nome: </label>
            <input type="text" name="nome" maxLength="50" size="40"
            required placeholderr="Informe seu nome completo">

        </p>

        <p>

            <label for="email">Email: </label>
            <input type="email" name="email" id="30" maxLength="30" required>

        </p>

        <p>

        <input type="submit" name="mostrar" value="Mostrar">

        </p>
    </form>
    <?php

 if(isset($_POST ["mostrar"]))

 {

 $nome = $_POST["nome"];

 $email = $_POST["email"];

echo "<p> Converte para MAIÚSCULAS</p> ";
echo "Nome: " . strtoupper($nome);
echo "<p> Converte para MINÚSCULAS </p>";
echo "<p> E-mail: " .strtolower($email) ; "</p>";

}
    require "rodape.php";

?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de acesso</title>
</head>
<body>
    <form name="login" method="post" action="">
        <caption>LOGIN DE ACESSO</caption>
        <p>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" maxlenght="50" required>

        </p>
------------------------------------------------------------------------
        <p>

            <label for="email">E-mail</label>
            <input type="email" name="email" maxlenght="30">

        </p>
------------------------------------------------------------------------
        <p>

        <input type="submit" name="enviar" value="Enviar">

        </p>
------------------------------------------------------------------------
    </form>

    <?php
        if(isset($_POST["enviar"]))
        {

            //recupera os dados do formulário
            $nome = $_POST["nome"];
            $email = $_POST["email"];

            session_start();//inicia a sessão
            $_SESSION["nome"] = $nome;
            $_SESSION["email"] = $email;

        }

    ?>

        <p><a href="index.php">Voltar</a></p>

</body>
</html>
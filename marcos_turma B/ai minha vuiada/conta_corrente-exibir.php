<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Conta Corrente</title>
  
</head>
<body>
    <?php

        echo "<h3>CONTROLE BANCÁRIO - CADASTRO DE CONTA CORRENTE</h3>";
        if($_SERVER['REQUEST_METHOD'] =='POST'){//VERIDICA SE FOI EFETUADP O CADASTRO DOS DADOS NO FORMULÁRIO DA CONTA CORRENTE


            $nome_correntista = $_POST["nome"];
            echo "<strong>Nome do Correntista: </strong>" . $nome_correntista;
            $banco = $_POST["banco"];

            if($banco == "#"){
                echo "<h3>Por Favor... selecione o banco!</h3>";
                echo "<p><a href='conta_corrente.html'>Cadastro de Conta Corrente</a></p>";
            }

            if($banco == "caixa"){
                echo "<br><strong>Cliente da Caixa Econômica Federal</strong>";
            }
            elseif($banco == "brasil"){
                echo "<br><strong>Cliente do Banco do Brasil</strong>";
            }
            elseif($banco == "mercantil"){
                echo "<br><strong>Cliente do Banco Mercantil</strong>";
            }
            elseif($banco == "santander"){
                echo "<br><strong>Cliente do Banco Santander</strong>";
            }
            elseif($banco == "bradesco"){
                echo "<br><strong>Cliente do Banco Bradesco</strong>";
            }

            $agencia = $_POST["agencia"];
            $conta = $_POST["conta_corrente"];
            $data_abertura = $_POST["data_abertura"];
            $saldo_inicial = $_POST["saldo_inicial"];
            $deposito = $_POST["deposito"];
           

            echo "<br><strong>Agencia: </strong>". $agencia;
            echo "<br><strong>Conta Corrente: </strong>". $conta;
            echo "<br><strong>Data de Abertura: </strong>". $data_abertura;
            echo "<br><strong>Saldo Inicial: </strong>". $saldo_inicial;
            echo "<br><strong>Deposito: </strong>". $deposito;
            echo "<br><strong>Saldo Atual: </strong>" . ($saldo_inicial + $deposito);

            $tipo = $_POST["tipo_conta"];
            
            if($tipo == 'Conta Comum'){
                echo "Sua Conta é Comum";
            }
            else{
                echo "Sua Conta é Especial";
            }

        }
        else
        {
            echo "<h3>Atenção... você tem que cadastrar os dados primeiro!</h3>";
            echo "<a href'conta_corrente.html'>Cadastro de Conta Corrente</a>";
        }
    ?>
</body>
</html>
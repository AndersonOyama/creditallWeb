<?php

include 'con.php';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Creditall Teste</title>

    <!-- Bootstrap -->
    <link href="css/main.css" rel="stylesheet">


</head>

<!--HEADER-->
<div id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listar.php">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exclusao.php">Exclusão</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrar.php">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <?php
    if (!empty($_POST)) {

        $nome = $_POST["inputName"];
        $nascimento = $_POST["nascimento"];
        $rendimento = $_POST["rendimento"];

        $sq = "INSERT INTO consumidor (nome_consumidor, data_nascimento, rendimento) 
                    VALUES('$nome', '$nascimento', '$rendimento')";

        if (mysqli_query($conexao, $sq)) {
            echo ("Salvo com sucesso!");
        } else {
            echo ("Erro ao salvar");
        }
    } else {
        echo ("Erro ao tentar cadastrar");
    }

    mysqli_close($conexao);
    ?>

</div>

<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>
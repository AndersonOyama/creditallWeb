<?php
  include 'conn.php';
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
  <body>

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
    

    <div id="home">

      <h1>Exclusão</h1>

    </div>

    <div class="container">
      <form method="post" id="consult">
        <label>Id do cadastro:</label>
        <input type="text" name="idNumber" required="">
        <input type="submit" name="insert" id="insert" value="Consultar" class="btn btn-success" />
      
      </form>
    </div>



    

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>

  <script>

  
  </script>

</html>
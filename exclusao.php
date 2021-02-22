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
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalConsult">Consultar</button>

    </form>

  <script>
    $sqli="SELECT * FROM `consumidor` WHERE `id_consumidor` = $idNumber;";
    $result = mysqli_query($conexao, $sqli);
    if($result->num_rows == 0){
      echo ("Usuário inexistente");
    }

  </script>



    <!-- <?php
    if (isset($_POST['consult'])) {
      echo "<script>$('#modalConsult').modal('show)</script>";
    }
    ?> -->

  </div>

  <div id="modalConsult" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div><input type="submit" name="consult" id="insert" value="Consultar" class="btn btn-success" />
    </div>

  </div>
</div>





  <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
  <script src="js/bootstrap.min.js"></script>
</body>

<script>


</script>

</html>
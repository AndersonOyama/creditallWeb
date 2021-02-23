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
      <input type="submit" class="button" name="consultar" value="consultar" />

    </form>
  </div>


  <?php
    if (isset($_POST['consultar'])) {
      $id = $_POST["idNumber"];
      $sqli = "SELECT * FROM `consumidor` WHERE `id_consumidor` = '$id'";

      $result = mysqli_query($conexao, $sqli);

      if ($result) {
        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
        } else {
          echo ("Usuário inexistente");
        }
      } else {
        echo "Erro: " . mysqli_error($conexao);
      }
    }
    $conexao->close();
  ?>

<?php
  $id = $_POST['idNumber'];
  if(isset($_POST['sim'])) { 
    global $id;
    $sqliDel = "DELETE FROM `consumidor` WHERE `id_consumidor` = '$id' ";
    $resultDel = mysqli_query($conexao,$sqliDel);
    echo ($sqliDel);
    if($resultDel){
      echo("Usuário excluido com sucesso!");
      echo($sqliDel);
    } else {
      echo("Erro ao excluir usuário");
    }
  } 
  if(isset($_POST['cancelar'])) { 
    echo "Operação cancelado"; 
  } 
?> 



  <?php if (mysqli_num_rows($result) > 0) : ?>
    <div container="confirmacao">
      Cliente: <?php echo ($row['nome_consumidor']); ?>
      <form method="post">
        <input type="submit" name="sim" value="Sim".$_POST[$row]/>
        <input type="submit" name="cancelar" value="Cancelar"/>
      </form>
    </div>
  <?php endif; ?>




  <!--Modal inexistente-->

  <div class="modal fade" id="modalInexistente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cliente Inexistente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

        </div>
      </div>
    </div>
  </div>





  <!-- <script>

    $sqli = "SELECT * FROM `consumidor` WHERE `id_consumidor` = $idNumber;";
    $result = mysqli_query($conexao, $sqli);
    if ($result - > num_rows == 0) {
      echo("Usuário inexistente");
    }
  </script> -->





  <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
  <script src="js/bootstrap.min.js"></script>
</body>

<script>


</script>

</html>
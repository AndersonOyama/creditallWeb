<?php
include 'con.php';

$consulta = "SELECT * FROM consumidor ORDER BY id_consumidor DESC";
$resultado = mysqli_query($conexao, $consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
  <title>Creditall Listar</title>

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
    <div class="table-responsive">
      <table id="consumidor_data" class="table table-striped table-bordered">
        <thead>
          <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Data de nascimento</td>
            <td>Rendimento</td>
          </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_array($resultado)) {
          echo '  
          <tr>  
            <td>' . $row["id_consumidor"] . '</td>  
            <td>' . $row["nome_consumidor"] . '</td>  
            <td>' . $row["data_nascimento"] . '</td>  
            <td>' . $row["rendimento"] . '</td>   
          </tr>  
        ';
        }
        ?>
      </table>
    </div>
  </div>


  <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</body>

<script>
    $(document).ready(function() {
      $('#consumidor_data').DataTable( {
        "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }
      });
    });
  </script>


</html>
<?php
include 'con.php';
$consulta = "SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'consumidor' ";
$resultado = mysqli_query($conexao, $consulta);

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

    <h1>Cadastrar novo cliente</h1>

  </div>


  <div id="add_consumidor">
    <form method="POST" ,id="insert_form", action="insert.php">

      <label>Nome do cliente:</label>
      <input type="text" class="form-control" id="inputName" name="inputName" required="">
      <br />
      <label>Nascimento</label>
      <input id="nascimento" name="nascimento" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)">
      <br />
      <label>Rendimento</label>
      <input type="text" id="rendimento" name="rendimento" class="dinheiro form-control" style="display:inline-block" required="" />
      <br />
      <input type="submit" name="insert" id="insert" value="Cadastrar" class="btn btn-success" />
    </form>
  </div>

  </div>

  </div>



  <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
</body>

<!-- <script> 
  $(document).ready(function() {
    $("#insert_form").on("submit", function(event) {
      event.preventDefault();
        
      var nome = $('#inputName').val();
      var nascimento = $('#nascimento').val();
      var rendimento = $('#rendimento').val();

      $.ajax({
        url: "insert.php",
        type: "POST",
        data: {
          nome: nome,
          nascimento: nascimento,
          rendimento: rendimento
        },
        cache: false,
        beforeSend: function() {
          $("#insert").val("Cadastrando...");
        },
        success: function(data) {
          alert(Cadastro)
          $("#insert_form")[0].reset();
          $("#insert").val("Cadastrar");
        }
      });
    });
  });
</script> -->


</html>
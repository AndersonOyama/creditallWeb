<?php

$servidor = "localhost";
$schema = "creditall";
$usuario = "creditall";
$senha = "12345678";

$conexao = mysqli_connect($servidor, $usuario, $senha, $schema);

if($conexao->connect_error){
    die("Erro na conexão: " . $conexao->connet_error);
}

?>


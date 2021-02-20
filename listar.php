<?php

$servidor = "localhost";
$schema = "creditall";
$usuario = "creditall";
$senha = "12345678";

$conexao = mysqli_connect($servidor, $usuario, $senha, $schema);


?>


$consulta = mysql_querry($conexao, "SELECT * FROM consumidor");

print_r($consulta);

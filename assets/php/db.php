<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "schema_tcc";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM notas_usuarios WHERE jogo = 'Starfield'";
$consulta_usuarios = mysqli_query($conexao, $query);

$query = "SELECT * FROM notas_criticos WHERE jogo = 'Starfield'";
$consulta_criticos = mysqli_query($conexao, $query);

$query = "SELECT nota FROM notas_usuarios WHERE usuario = 'Angelo'";
$notaBanco = mysqli_query($conexao, $query);
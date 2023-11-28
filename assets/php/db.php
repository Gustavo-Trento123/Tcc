<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "schema_tcc";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM notas WHERE jogo = 'Starfield'";
$consulta_notas = mysqli_query($conexao, $query);


while($linha = mysqli_fetch_array($consulta_notas)){
    $notas[] = round($linha['nota'],2);
}

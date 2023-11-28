<?php

include 'db.php';

$somaNotas = 0;


for($i = 0; $i < count($notas); $i++){
   
    $somaNotas = $somaNotas + $notas[$i];
}

$media = $somaNotas / count($notas);



?>

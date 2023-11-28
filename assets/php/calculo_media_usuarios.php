<?php

include 'db.php';
$i = 0;
$somaNotaUsuarios = 0;
$numeroUsuariosReal = 0;
while ($linha = mysqli_fetch_array($consulta_usuarios)) {
    $nota = $linha['nota'];
    $numeroUsuariosReal ++;
    if ($nota == 1) {
        $somaNotaUsuarios +=  2 * 0;
        $numeroUsuarios[$i] = 1;
    }elseif ($nota == 2) {
        $somaNotaUsuarios += 2 * 1;
        $numeroUsuarios[$i] = 2;
        $i++;
        $numeroUsuarios[$i] = 2;
    }elseif ($nota == 3) {
        $somaNotaUsuarios += 2 * 2;
        $numeroUsuarios[$i] = 3;
        $i++;
        $numeroUsuarios[$i] = 3;
    }elseif ($nota == 4) {
        $somaNotaUsuarios += 2 * 3;
        $numeroUsuarios[$i] =4;
        $i++;
        $numeroUsuarios[$i] = 4;
    }elseif ($nota == 5) {
        $somaNotaUsuarios += 4;
        $numeroUsuarios[$i] = 5;
    }
    $i++;

    $mediaUsuarios = round(($somaNotaUsuarios / count($numeroUsuarios)) * 25,0);
};

$r = 0;
$somaNotaCriticos = 0;
$numeroCriticosReal = 0;
while ($linha = mysqli_fetch_array($consulta_criticos)) {
    $nota = $linha['nota'];
    $numeroCriticosReal++;
    if ($nota == 1) {
        $somaNotaCriticos +=  2 * 0;
        $numeroCriticos[$r] = 1;
    }elseif ($nota == 2) {
        $somaNotaCriticos += 2 * 1;
        $numeroCriticos[$r] = 2;
        $r++;
        $numeroCriticos[$r] = 2;
    }elseif ($nota == 3) {
        $somaNotaCriticos += 2 * 2;
        $numeroCriticos[$r] = 3;
        $r++;
        $numeroCriticos[$r] = 3;
    }elseif ($nota == 4) {
        $somaNotaCriticos += 2 * 3;
        $numeroCriticos[$r] =4;
        $r++;
        $numeroCriticos[$r] = 4;
    }elseif ($nota == 5) {
        $somaNotaCriticos += 4;
        $numeroCriticos[$r] = 5;
    }
    $r++;

    $mediaCriticos = round(($somaNotaCriticos / count($numeroCriticos)) * 25,0);
};

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/css/pagina-jogo.css">
    <!-- jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Materialize css e scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- icones Materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- scripts gerais e funções materialize -->
    <script src="assets/script/script.js"></script>
    <title>The Real Score - Starfield</title>

</head>

<body onload="restaurarVideoOriginal()">
    <?php
    include 'menu.php';
    ?>

    <!-- barra de navegação jogos -->
    <div id="id-bar">
        <li><a href=""></a>JOGO</li>
        <li><a href=""></a>COMPARADOR DE PREÇOS</li>
        <li><a href=""></a>AVALIAÇÕES</li>
    </div>

    <div class="container1">
        <div class="info-jogo-mobile teste" style="display: none;">
            <?php include 'assets/php/notas.php'?>
                <div>
                    <?php
                        while ($linha = mysqli_fetch_array($notaBanco)) {
                            $notaAtual = $linha['nota'];
                        };
                    ?>

                    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
                        <div class="estrelas">
                            <input type="radio" id="vazio" name="estrela" value="" <?= $notaAtual == '' ? 'checked' : '' ?>>

                            <label for="estrela_um"><i class="fa"></i></label>
                            <input type="radio" id="estrela_um" name="estrela" value="1" <?= $notaAtual == '1' ? 'checked' : '' ?>>

                            <label for="estrela_dois"><i class="fa"></i></label>
                            <input type="radio" id="estrela_dois" name="estrela" value="2" <?= $notaAtual == '2' ? 'checked' : '' ?>>

                            <label for="estrela_tres"><i class="fa"></i></label>
                            <input type="radio" id="estrela_tres" name="estrela" value="3" <?= $notaAtual == '3' ? 'checked' : '' ?>>

                            <label for="estrela_quatro"><i class="fa"></i></label>
                            <input type="radio" id="estrela_quatro" name="estrela" value="4" <?= $notaAtual == '4' ? 'checked' : '' ?>>

                            <label for="estrela_cinco"><i class="fa"></i></label>
                            <input type="radio" id="estrela_cinco" name="estrela" value="5" <?= $notaAtual == '5' ? 'checked' : '' ?>>

                            <button class="btn waves-effect waves-light" name="sub-nota" value="Enviar" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="display-jogo">

            <div class="div-video" id="div-video">
                <!-- VIDEO e IMGS por javascript -->
            </div>
            <div id="medias" class="carousel-jogo">
                <div class="carousel-inner-jogo">
                    <img src="https://i.ytimg.com/vi_webp/Ek3I6_9c58E/maxresdefault.webp" alt="" class="voltar-video">
                    <img src="assets/img/pagina-jogo/starfield-logo.jpeg" alt="" class="trocar-video">
                    <img src="assets/img/pagina-jogo/starfield-1.png" alt="" class="trocar-video">
                    <img src="assets/img/pagina-jogo/starfield-2.jpg" alt="" class="trocar-video">
                    <img src="assets/img/pagina-jogo/starfield-3.png" alt="" class="trocar-video">
                    <img src="assets/img/pagina-jogo/starfield-4.jpg" alt="" class="trocar-video">
                    <img src="assets/img/pagina-jogo/starfield-5.png" alt="" class="trocar-video">
                    <img src="assets/img/pagina-jogo/starfield-6.png" alt="" class="trocar-video">
                </div>
            </div>

            <br>
            <div class="descricao">
                <h5><b>SOBRE STARFIELD</b></h5>
                <p>
                    Starfield é o primeiro universo novo em mais de 25 anos da Bethesda Game Studios, os premiados criadores de The Elder Scrolls V: Skyrim e Fallout 4. Neste RPG para a nova geração em meio às estrelas, crie o personagem que você quiser e explore com liberdade inigualável enquanto embarca em uma jornada épica para desvendar o maior mistério da humanidade.
                </p>
                <br>
                <h5>REQUISITOS DE SISTEMA</h5>

                <table>
                    <tr>
                        <th>MÍNIMOS</th>
                        <th>RECOMENDADOS</th>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><strong>SO:</strong> Windows 10 version 21H1 (10.0.19043)</li>
                                <li><strong>Processador:</strong> AMD Ryzen 5 2600X, Intel Core i7-6800K</li>
                                <li><strong>Memória:</strong> 16 GB de RAM</li>
                                <li><strong>Placa de vídeo:</strong> AMD Radeon RX 5700, NVIDIA GeForce 1070 Ti</li>
                                <li><strong>DirectX:</strong> Versão 12</li>
                                <li><strong>Armazenamento:</strong> 125 GB de espaço disponível</li>
                                <li><strong>Outras observações:</strong> SSD Required</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><strong>SO:</strong> Windows 10/11 with updates</li>
                                <li><strong>Processador:</strong> AMD Ryzen 5 3600X, Intel i5-10600K</li>
                                <li><strong>Memória:</strong> 16 GB de RAM</li>
                                <li><strong>Placa de vídeo:</strong> AMD Radeon RX 6800 XT, NVIDIA GeForce RTX 2080</li>
                                <li><strong>DirectX:</strong> Versão 12</li>
                                <li><strong>Rede:</strong> Conexão de internet banda larga</li>
                                <li><strong>Armazenamento:</strong> 125 GB de espaço disponível</li>
                                <li><strong>Outras observações:</strong> SSD Required</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="info-jogo teste2">
            <?php
                include 'assets/php/notas.php';
            ?>
                <div>
                    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
                        <div class="estrelas">
                            <input type="radio" id="vazio" name="estrela" value="" <?= $notaAtual == '' ? 'checked' : '' ?>>

                            <label for="estrela_um1"><i class="fa"></i></label>
                            <input type="radio" id="estrela_um1" name="estrela" value="1" <?= $notaAtual == '1' ? 'checked' : '' ?>>

                            <label for="estrela_dois1"><i class="fa"></i></label>
                            <input type="radio" id="estrela_dois1" name="estrela" value="2" <?= $notaAtual == '2' ? 'checked' : '' ?>>

                            <label for="estrela_tres1"><i class="fa"></i></label>
                            <input type="radio" id="estrela_tres1" name="estrela" value="3" <?= $notaAtual == '3' ? 'checked' : '' ?>>

                            <label for="estrela_quatro1"><i class="fa"></i></label>
                            <input type="radio" id="estrela_quatro1" name="estrela" value="4" <?= $notaAtual == '4' ? 'checked' : '' ?>>

                            <label for="estrela_cinco1"><i class="fa"></i></label>
                            <input type="radio" id="estrela_cinco1" name="estrela" value="5" <?= $notaAtual == '5' ? 'checked' : '' ?>>

                            <button class="btn waves-effect waves-light" name="sub-nota" value="Enviar" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>

                            <?php
                                if (isset($_POST['sub-nota']) && $_POST['estrela'] != null) {
                                    $notaAtual = $_POST['estrela'];

                                    $query = "UPDATE notas_usuarios SET nota = $notaAtual WHERE usuario = 'Angelo'";
                                    mysqli_query($conexao, $query);

                                    echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
                                }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var nota_critico = <?= json_encode($mediaCriticos, JSON_UNESCAPED_UNICODE); ?>;
        var nota_usuario = <?= json_encode($mediaUsuarios, JSON_UNESCAPED_UNICODE); ?>;
        var classCriticos = '.critico';
        var classUsuarios = '.usuario';
        alterarCor(nota_critico, classCriticos);
        alterarCor(nota_usuario, classUsuarios);

        function alterarCor(x, y) {
            if (x <= 33) {
                $(y).addClass("red");
            } else if (x <= 66) {
                $(y).addClass("yellow");
            } else {
                $(y).addClass("green");
            }
        }
    </script>
    <?php
    include 'modal_rodape.php';
    ?>
    <script src="assets/script/carossel-jogo.js"></script>

</body>

</html>
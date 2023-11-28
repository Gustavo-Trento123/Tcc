<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/css/pagina-jogo.css">
    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- icones materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Catálogo de Jogos -->
    <link rel="stylesheet" href="./assets/css/Owl/owl.carousel.min.css">
    <!-- Opcional theme.defaul não sei o que faz -->
    <link rel="stylesheet" href="./assets/css/Owl/owl.theme.default.min.css">
    <!-- jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    
    <!-- scripts gerais e funçoes materialize -->
    <script src="assets/script/script.js"></script>
    <title>The Real Score</title>
</head>
<body>
    <?php 
        include 'menu.php';
    ?>

    <!-- Carrossel principal -->
    <div id="conteudo">
        <div class="carousel">
            <div href="#one" class="carousel-item">
                <a href="jogo.php"><img src="assets/img/carrosel/carrosel1.jpg" alt="Jogo baldur's Gate" class="img-carossel"></a>
            </div>
            <div href="#two" class="carousel-item">
                <a href="jogo.php"><img src="assets/img/carrosel/carrosel2.jpg" alt="Jogo Sea of Stars" class="img-carossel"></a>
            </div>
            <div href="#three" class="carousel-item">
                <a href="jogo.php"><img src="assets/img/carrosel/carrosel3.jpg" alt="Jogo Starfield" class="img-carossel"></a>
            </div>
            <div href="#four" class="carousel-item">
                <a href="jogo.php"><img src="assets/img/carrosel/carrosel4.jpg" alt="jogo Cs 2" class="img-carossel"></a>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </div>

    <!-- Catálogo de Jogos -->
    <div id="catalogo" class="carrosel-filmes">
        <div>
            <span class="anchor" id="emalta"></span>
            <h5>Em alta:</h5>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/cs2.jpg" alt="jogo cs2">
                    <p class="nome-jogo">Counter-Strike 2</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/baldersgate.jpg" alt="jogo balder's gate">
                    <p class="nome-jogo">Balder's Gate</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/orithewillofwisps.jpg" alt="jogo ori the will of wisps">
                    <p class="nome-jogo">ORI and the will of wisps</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/starfield.jpg" alt="jogo starfield">
                    <p class="nome-jogo">Starfield</p></a>
                </div>
            </div>
        </div>
    
        <div>
            <span id="recomendados" class="anchor"></span>
            <h5>Recomendados:</h5>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/starfield.jpg" alt="jogo starfield">
                    <p class="nome-jogo">Starfield</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/cs2.jpg" alt="jogo cs2">
                    <p class="nome-jogo">Counter-Strike 2</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/baldersgate.jpg" alt="jogo balder's gate">
                    <p class="nome-jogo">Balder's Gate</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/orithewillofwisps.jpg" alt="jogo ori the will of wisps">
                    <p class="nome-jogo">ORI and the will of wisps</p></a>
                </div>
            </div>
        </div>

        <div>
            <span id="acao" class="anchor"></span>
            <h5>Ação:</h5>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/orithewillofwisps.jpg" alt="jogo ori the will of wisps">
                    <p class="nome-jogo">ORI and the will of wisps</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/starfield.jpg" alt="jogo starfield">
                    <p class="nome-jogo">Starfield</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/cs2.jpg" alt="jogo cs2">
                    <p class="nome-jogo">Counter-Strike 2</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/baldersgate.jpg" alt="jogo balder's gate">
                    <p class="nome-jogo">Balder's Gate</p></a>
                </div>
            </div>
        </div>

        <div>
            <span id="sobre" class="anchor"></span>
            <h5>Sobrevivência:</h5>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/baldersgate.jpg" alt="jogo balder's gate">
                    <p class="nome-jogo">Balder's Gate</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/orithewillofwisps.jpg" alt="jogo ori the will of wisps">
                    <p class="nome-jogo">ORI and the will of wisps</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/starfield.jpg" alt="jogo starfield">
                    <p class="nome-jogo">Starfield</p></a>
                </div>
                <div class="item">
                    <a href="jogo.php"> <img class="box-filme" src="./assets/img/Catalogo/cs2.jpg" alt="jogo cs2">
                    <p class="nome-jogo">Counter-Strike 2</p></a>
                </div>
            </div>
        </div>
        <script src="./assets/script/Owl/owl.carousel.min.js"></script>
        <script src="./assets/script/Owl/main.js"></script>
    </div>
    

    <?php 
        include 'modal_rodape.php';
    ?>
</body>

</html>

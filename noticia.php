<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/css/noticia.css">
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
    <!-- scripts gerais e funções materialize -->
    <script src="assets/script/script.js"></script>
    <title>The Real Score - Críticos</title>
</head>
<body>
<?php 
        include 'menu.php';
    ?>

    <div id="id-bar">
        <li><a href="#" onclick="M.toast({html: 'Em desenvolvimento'})">Novidades</a></li>
    </div>

    <div class="container-noticia">
        <div class="jogo">
            <div style="width:100%;">
                <div style="float: left;width:15%;" class="float-responsivo">
                    <a href="jogo.php"><img class='my-image jogo-noticia' src="assets/img/Catalogo/starfield.jpg"></a>
                    <p class="nome">Starfield</p>
                </div>
                <div style="float:none;" class="info"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti labore eius hic harum illum illo dicta ipsa nemo, dolor at inventore assumenda! Accusamus id pariatur cupiditate perspiciatis itaque labore, numquam quidem corporis ipsam a laudantium at eveniet sunt natus officiis unde, ea ullam vel repellat, dignissimos quibusdam neque! Obcaecati ratione eligendi officiis dolorum voluptas earum, alias sit eaque quaerat temporibus delectus. Quo consectetur quia dolorem nam voluptate, voluptas, voluptatibus repellendus delectus recusandae beatae impedit, unde fuga. Quo amet praesentium, maxime ut sed a rerum. Nostrum consequatur aliquid ipsum officia nam neque modi sunt. Adipisci, incidunt distinctio sunt ad nostrum quis?</div>
            </div>
        </div>
        <div class="jogo">
            <div style="width:100%;">
                <div style="float: left;width:15%;" class="float-responsivo">
                    <a href="index.php "><img class='my-image jogo-noticia' src="assets/img/Catalogo/baldersgate.jpg"></a>
                </div>
                <div style="float:none;" class="info"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti labore eius hic harum illum illo dicta ipsa nemo, dolor at inventore assumenda! Accusamus id pariatur cupiditate perspiciatis itaque labore, numquam quidem corporis ipsam a laudantium at eveniet sunt natus officiis unde, ea ullam vel repellat, dignissimos quibusdam neque! Obcaecati ratione eligendi officiis dolorum voluptas earum, alias sit eaque quaerat temporibus delectus. Quo consectetur quia dolorem nam voluptate, voluptas, voluptatibus repellendus delectus recusandae beatae impedit, unde fuga. Quo amet praesentium, maxime ut sed a rerum. Nostrum consequatur aliquid ipsum officia nam neque modi sunt. Adipisci, incidunt distinctio sunt ad nostrum quis?</div>
            </div>
        </div>
        <div class="jogo">
            <div style="width:100%;">
                <div style="float: left;width:15%;" class="float-responsivo">
                    <img class='my-image jogo-noticia' src="assets/img/Catalogo/cs2.jpg">
                </div>
                <div style="float:none;" class="info"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti labore eius hic harum illum illo dicta ipsa nemo, dolor at inventore assumenda! Accusamus id pariatur cupiditate perspiciatis itaque labore, numquam quidem corporis ipsam a laudantium at eveniet sunt natus officiis unde, ea ullam vel repellat, dignissimos quibusdam neque! Obcaecati ratione eligendi officiis dolorum voluptas earum, alias sit eaque quaerat temporibus delectus. Quo consectetur quia dolorem nam voluptate, voluptas, voluptatibus repellendus delectus recusandae beatae impedit, unde fuga. Quo amet praesentium, maxime ut sed a rerum. Nostrum consequatur aliquid ipsum officia nam neque modi sunt. Adipisci, incidunt distinctio sunt ad nostrum quis?</div>
            </div>
        </div>
        <div class="jogo">
            <div style="width:100%;">
                <div style="float: left;width:15%;" class="float-responsivo">
                    <img class='my-image jogo-noticia' src="assets/img/Catalogo/orithewillofwisps.jpg">
                </div>
                <div style="float:none;" class="info"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti labore eius hic harum illum illo dicta ipsa nemo, dolor at inventore assumenda! Accusamus id pariatur cupiditate perspiciatis itaque labore, numquam quidem corporis ipsam a laudantium at eveniet sunt natus officiis unde, ea ullam vel repellat, dignissimos quibusdam neque! Obcaecati ratione eligendi officiis dolorum voluptas earum, alias sit eaque quaerat temporibus delectus. Quo consectetur quia dolorem nam voluptate, voluptas, voluptatibus repellendus delectus recusandae beatae impedit, unde fuga. Quo amet praesentium, maxime ut sed a rerum. Nostrum consequatur aliquid ipsum officia nam neque modi sunt. Adipisci, incidunt distinctio sunt ad nostrum quis?</div>
            </div>
        </div>

        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="noticia.php">1</a></li>
            <li class="waves-effect"><a href="noticia-2.php">2</a></li>
            <li class="waves-effect"><a href="noticia-3.php">3</a></li>
            <li class="waves-effect"><a href="noticia-2.php"><i class="material-icons">chevron_right</i></a></li>
        </ul>   
    </div>

    <?php 
        include 'modal_rodape.php';
    ?>
</body>
</html>

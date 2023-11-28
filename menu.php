<div id="navegacao" class="nav-extended nav-wrapper">
        <a href="index.php"><img src="./assets/img/logo2.png" class="logo brand-logo"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-medium-and-down"><i class="material-icons ">menu</i></a>
        <ul id="nav-mobile" class="menu right hide-on-med-and-down">
            <li><a class='dropdown-trigger' href='#' data-target='dropdown1'>Jogos &nbsp<i class="arrow down"></i></a></li>
            <li><a href="#" onclick="M.toast({html: 'Em desenvolvimento'})">Críticos</a></li>
            <li><a href="noticia.php">Notícias</a></li>
        </ul>
        <div class="usuarionav right hide-on-med-and-down">
            <img src="assets/img/usuario.png">
            <p><a class="waves-effect waves-light btn modal-trigger" href="#modal1">CONTA</a></p>
        </div>
        <div class="sidenav" id="mobile-demo">
            <ul>
                <li><a class="sidenav-close" href="#!"><i class="material-icons" style="color:white; margin: 0 0 0 100%;">close</i></a></li>
                <li>
                    <a class='dropdown-trigger' href='#' data-target='dropdown2'>Jogos</a>
                    <ul id='dropdown2' class='dropdown-content-sidnav' style="position: relative;">
                        <fieldset class="dropdown-jogos">
                            <legend>Mundo dos Jogos</legend>
                            <li><a href="index.php#emalta">Em Alta</a></li>
                            <li><a href="index.php#recomendados">Recomendados</a></li>
                            <li><a href="#!" onclick="M.toast({html: 'Em desenvolvimento'})">Top de Todos os Tempos</a></li>
                            <li><a href="#!" onclick="M.toast({html: 'Em desenvolvimento'})">Exclusivos</a></li>
                        </fieldset>
                        <fieldset class="dropdown-jogos">
                            <legend>Temas</legend>
                            <li><a href="index.php#acao">Ação</a></li>
                            <li><a href="index.php#sobre">Sobrevivência</a></li>
                            <li><a onclick="M.toast({html: 'Em desenvolvimento'})">Terror</a></li>
                            <li><a onclick="M.toast({html: 'Em desenvolvimento'})">Estratégia</a></li>
                            <li><a onclick="M.toast({html: 'Em desenvolvimento'})">RPG</a></li>
                        </fieldset>
                        <fieldset class="dropdown-jogos">
                            <legend>Fique por Dentro</legend>
                            <li><a onclick="M.toast({html: 'Em desenvolvimento'})">Novidades</a></li>
                            <li><a onclick="M.toast({html: 'Em desenvolvimento'})">The Game Awards</a></li>
                        </fieldset>
                    </ul>
                </li>
                <li><a href="#" onclick="M.toast({html: 'Em desenvolvimento'})">Críticos</a></li>
                <li><a href="noticia.php">Notícias</a></li>
                <br><br>
                <div class="usuarionav">
                    <img src="assets/img/usuario.png">
                    <p><a class="waves-effect waves-light btn modal-trigger" href="#modal1">CONTA</a></p>
                </div>
            </ul>
        </div>
        <ul id='dropdown1' class='dropdown-content' style='display: none !important;'>
            <fieldset class="dropdown-jogos">
                <legend>Mundo dos Jogos</legend>
                <li><a href="index.php#emalta">Em Alta</a></li>
                <li><a href="index.php#recomendados">Recomendados</a></li>
                <li><a href="#!" onclick="M.toast({html: 'Em desenvolvimento'})">Top de Todos os Tempos</a></li>
                <li><a href="#!" onclick="M.toast({html: 'Em desenvolvimento'})">Exclusivos</a></li>
            </fieldset>
            <fieldset class="dropdown-jogos">
                <legend>Temas</legend>
                <li><a href="index.php#acao">Ação</a></li>
                <li><a href="index.php#sobre">Sobrevivência</a></li>
                <li><a href="#!" onclick="M.toast({html: 'Em desenvolvimento'})">Terror</a></li>
                <li><a href="#!" onclick="M.toast({html: 'Em desenvolvimento'})">Estratégia</a></li>
                <li><a href="#!" onclick="M.toast({html: 'Em desenvolvimento'})">RPG</a></li>
            </fieldset>
            <fieldset class="dropdown-jogos">
                <legend>Fique por Dentro</legend>
                <li><a href="#!" onclick="M.toast({html: 'Em desenvolvimento'})">Novidades</a></li>
                <li><a href="#!" onclick="M.toast({html: 'Em desenvolvimento'})">The Game Awards</a></li>
            </fieldset>
        </ul>
    </div>
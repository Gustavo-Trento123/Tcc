<div class="img">
    <img src=" assets/img/carrosel/carrosel3.jpg ">
</div>
<div class="notas-nome">
    <p class=" nome">Starfield</p>
    <div class="notas">
        <div class="borda-notas">
            <p>Críticos</p>
            <p class="nota critico" id="nota">

                <?php
                include 'assets/php/calculo_media_usuarios.php';
                echo $mediaCriticos;
                ?>

            </p>
            <p class="numero">
                <?= $numeroCriticosReal; ?>
            </p>
        </div>
        <div class="borda-notas">
            <p>Usuários</p>
            <p class="nota usuario" id="nota">
                <?php
                echo $mediaUsuarios;
                ?>

            </p>
            <p class="numero">
                <?= $numeroUsuariosReal; ?>
            </p>
        </div>
    </div>
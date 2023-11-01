/* Index */
/* Carossel principal */
$(document).ready(function () {
    var carousel = $('.carousel');

    carousel.carousel({
        duration: 300,
        indicators: true,
    });
    var intervalo = 5000;     /* Intervalo em ms rotação */

    var autoplayInterval = setInterval(autoplay, intervalo);

    function autoplay() {
        carousel.carousel('next');
    }

    // Corrigir problema ao segurar o carrossel pc e celular
    carousel.on('mousedown touchstart', function () {
        clearInterval(autoplayInterval);
    });

    carousel.on('mouseupm touchend', function () {
        autoplayInterval = setInterval(autoplay, intervalo);
    });   
});


/* Funções Materialize */
$(document).ready(function(){
    /* Sidenav barra lateral mobile responsividade  */
    $('.sidenav').sidenav();
    /* Modal Login */
    $('.modal').modal();
    /* Dropdown aba jogos */
    $('.dropdown-trigger').dropdown();
});
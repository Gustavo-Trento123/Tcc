
const imagensTrocarVideo = document.querySelectorAll(".trocar-video");
const voltarVideo = document.querySelector(".voltar-video");
const divVideo = document.getElementById("div-video");

/* Video do trailer sempre colocar os url aqui */
let videoOriginalSrc = "https://www.youtube.com/embed/Ek3I6_9c58E?si=QH4OQ2EbD72XksgV";

function restaurarVideoOriginal() {
    divVideo.innerHTML = `<iframe src="${videoOriginalSrc}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
    divVideo.style.paddingTop = "56%";
}

voltarVideo.addEventListener("click", restaurarVideoOriginal);

imagensTrocarVideo.forEach((imagem) => {
    imagem.addEventListener("click", function () {
        const novoSrc = this.getAttribute("src");
        divVideo.innerHTML = `<div style="height: 100%; margin-bottom: 0%;"><img src="${novoSrc}" style="width: 100%; height: 100%; object-fit: cover;"></div>`;
        divVideo.style.paddingTop = "0%";
    });
});


/* Carrosel draggable */
$(document).ready(function () {
    const $carousel = $('.carousel-jogo');
    const $carouselInner = $carousel.find('.carousel-inner-jogo');
    const $images = $carouselInner.find('img');
    let currentIndex = 0;

    $images.on('dragstart', function (e) {
        e.preventDefault();
    });

    $carousel.on('mousedown touchstart', function (e) {
        const startX = e.type === 'mousedown' ? e.pageX : e.originalEvent.touches[0].pageX;
        const initialScrollLeft = $carousel.scrollLeft();

        $carousel.on('mousemove touchmove', function (e) {
            const currentX = e.type === 'mousemove' ? e.pageX : e.originalEvent.touches[0].pageX;
            const diffX = currentX - startX;
            $carousel.scrollLeft(initialScrollLeft - diffX);
        });

        $carousel.on('mouseup touchend', function () {
            $carousel.off('mousemove touchmove');
            $carousel.off('mouseup touchend');
        });
    });
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1.5
        },
        600:{
            items:3.5
        },
        1000:{
            items:5.5
        }
    }
})



/*
Ultilizar o da original talvez TESTE 

$(window).on("scroll", function() {
    if($(window).scrollTop() > 100) {
        $("#navegacao").css("background-color", "black");
        document.getElementById("hero-video").pause();
    } else if($(window).scrollTop() < 10) {
        //remove the background property so it comes transparent again (defined in your css)
        $("#navegacao").css("background-color", "transparent");
        document.getElementById("hero-video").play();
    }
}); */
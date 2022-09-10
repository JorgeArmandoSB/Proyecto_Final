$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show"); 
        }
    });

    // slide-up script flecha volver al menu inicio
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
    });
    
    // toggle menu/navbar script
    let movil = "fas fa-bars", cerra = "fa-solid fa-xmark";
    $('.close').html(`<i class="${movil}"></i>`);
    $('.menu-btn').click(function () {
        $('.navbar .menu').toggleClass("active");
        $('.close').html(`<i class="${($(".navbar .menu").hasClass("active")) ? cerra : movil}"></i>`);
    });

     

    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
});



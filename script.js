$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
    });

    // toggle menu/navbar script
    let movil = "fas fa-bars", cerra = "fa-solid fa-xmark";
    $('.menu-btn').html(`<i class="${movil}"></i>`);
    $('.menu-btn').click(function () {
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn').html(`<i class="${($(".navbar .menu").hasClass("active")) ? cerra : movil}"></i>`);
    });
});



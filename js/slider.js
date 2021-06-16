jQuery(document).ready(function(){
    jQuery('.main-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 7000,
        pauseOnHover: false,
    });
});
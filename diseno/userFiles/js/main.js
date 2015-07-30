/* 
 * Author:    Programador2
 */

$(document).ready(function () {
//Fullpager
    $('#fullpage').fullpage({
        anchors: ["sec1", "sec2", "sec3", "sec4", "sec5", "sec6", "sec7"],
        animateAnchor: true,
        scrollOverflow: true,
        css3: false,
        slidesNavigation: true,
        afterRender: function () {
            animarHome();
        },
        onSlideLeave: function () {
            animarHome();
        }
    });
    //Aqui va el menu
    $("#main_menu_responsive").mmenu({
        "navbar": {
            title: "Nextrading"
        }
    });
    //Slider 
    $(".sliderOn").bxSlider();

    $(".sliderOnPrensa").bxSlider({
        //pager: false
    });
    //Carrousel
    $('.carrouselOnPrensa').bxSlider({
        minSlides: 3,
        maxSlides: 10,
        slideWidth: 170,
        slideMargin: 10,
        pager: false,
    });
    //Carrousel
    $('.carrouselVerInPrensa').bxSlider({
        mode: 'vertical',
        minSlides: 6,
        maxSlides: 15,
        slideMargin: 20
    });
    /** Animaciones usando Tween max **/
    function animarHome() {
        (new TimelineLite())
                /************** Inicio de las animaciones  ***************/
                .append([
                    TweenMax.fromTo($('.botton_smart'), 1, {css: {marginLeft: "0%", opacity: 0}}, {css: {marginLeft: "15%", opacity: 1}}),
                ])
                .append([
                    TweenMax.fromTo($('.txt_home'), 1, {css: {marginLeft: "0%", opacity: 0}}, {css: {marginLeft: "5%", opacity: 1}}),
                ]);
    }

    setInterval(function () {
        //$.fn.fullpage.moveSlideRight();
    }, 4000);
});

/* 
 * Author:    Programador2
 */

$(document).ready(function () {
//Fullpager
    $('#fullpage').fullpage({
        animateAnchor: true,
        scrollOverflow: true,
        css3: false,
        slidesNavigation: true,
    });
    //Aqui va el menu
    $("#main_menu_responsive").mmenu({
        "navbar": {
            title: "Nextrading"
        }
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
                ])
                .append([
                    TweenMax.fromTo($('.albert'), 1, {css: {right: -100, opacity: 0}}, {css: {right: 0, opacity: 1}})
                ]);
    }

    setInterval(function () {
        $.fn.fullpage.moveSlideRight();
    }, 4000);
});

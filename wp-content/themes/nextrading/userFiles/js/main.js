/* 
 * Author:    Programador2
 */

$(document).ready(function () {
//Fullpager
    /*
    $('#fullpage').fullpage({
       
        animateAnchor: true,
        scrollOverflow: true,
        css3: false,
        slidesNavigation: true,
        afterRender: function () {
            animarHome();
        },
        onSlideLeave: function () {
            animarHome();
        },
        fitToSection: false
    });
    */
    
    
    //Aqui va el menu
    $("#main_menu_responsive").mmenu({
        "navbar": {
            title: "Nextrading"
        }
    });
    //Slider 
    $(".sliderOn1").bxSlider();
    $(".sliderOn2").bxSlider();
    $(".sliderOn3").bxSlider();
    $(".sliderOn4").bxSlider();
    $(".sliderOn5").bxSlider();
    $(".sliderOn6").bxSlider();

    $(".sliderOnPrensa").bxSlider({
        //pager: false
    });
    //Carrousel
    $('.carrouselOnPrensa').bxSlider({
        minSlides: 3,
        maxSlides: 10,
        slideWidth: 170,
        slideMargin: 10,
        pager: false
    });
    //Carrousel
    $('.carrouselVerInPrensa').bxSlider({
        mode: 'vertical',
        minSlides: 3,
        pager: false,
        auto: true,
        autoStart: true,
        moveSlides: 1,
        infiniteLoop: false
    });





//funcion para detectar las almohadillas de la url
    function dataSeccion() {
        //Remover los datos de clase
        $(".mainMenu li").removeClass('active');
        //obtener data 
        var tab = window.location.hash.substring(1);
        console.log(typeof tab);
        if (tab != "") {
            $(".mainMenu li a[href='#" + tab + "']").parent('li').addClass('active');
        } else {
            $(".mainMenu li a[href='#sec1']").parent('li').addClass('active');
        }

    }



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


    $('.carrouselVerInPrensa p.ver_mas').click(function () {
        //obtengo el id
        var valorId = $(this).attr('id');
        //borro la información que tiene el div de noticias
        $('#prensaNoticia .contentNoticia').empty();
        //muestro el cargador
        $('#cambiando').fadeIn(1000);
        //inicio la consulta de ajax
        //creo la data carrusel
        var dataArticulo = {
            id: valorId
        };
        //obtengo la información desde la funcion
        $.ajax({
            type: "POST", //Tipo de peticion
            //url del controlador donde procesar·
            url: "http://" + document.domain + "/wp-content/themes/nextrading/funciones/funcion_prensa.php",
            //datos que le voy a enviar
            data: dataArticulo,
            success: function (data) {

                if (data != '') {
                    setTimeout(function () {
                        //oculto el div de cargando
                        $('#cambiando').fadeOut(500);
                        setTimeout(function(){
                            $('#prensaNoticia .contentNoticia').html(data);
                        }, 500)
                    }, 500);
                }

            }

        });
    });
    
    
    
    //scroling animado
    $('a[href*=#]').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
                && location.hostname === this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target
                    || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top - 120;
                $('html,body')
                        .animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
    });
    
});




/**
 * @name Eventos que se ejecutan luego de cargar todo el contenido
 */
$(document).ready(function () {

    /**
     * @name Evento menu responsive
     * @description Este evento permite cargar el menu responsive
     */
    $("#main_menu_responsive").mmenu({
        "navbar": {
            title: "Nextrading"
        }
    });


    /**
     * @name listado de eventos para sliders
     * @description Estos eventos activan los sliders de productos
     */
    $(".sliderOn1").bxSlider();
    $(".sliderOn2").bxSlider();
    $(".sliderOn3").bxSlider();
    $(".sliderOn4").bxSlider();
    $(".sliderOn5").bxSlider();
    $(".sliderOn6").bxSlider();

    /**
     * @name Evento slider home
     * @description Este evento permite activar el home de home
     */
    $(".sliderOnPrensa").bxSlider({
        //pager: false
    });
    /**
     * @name Evento slider prensa
     * @description Este evento permite activar el carrusel de noticias del home
     */
    $('.carrouselOnPrensa').bxSlider({
        minSlides: 3,
        maxSlides: 10,
        slideWidth: 170,
        slideMargin: 10,
        pager: false
    });
    $('.carrouselVerInPrensa').bxSlider({
        mode: 'vertical',
        minSlides: 3,
        pager: false,
        auto: true,
        autoStart: true,
        moveSlides: 1,
        infiniteLoop: false
    });

    /**
     * @name Evento cargar articulos
     * @description Este evento permite cargar la información de una noticia en la sección del home
     */
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
                        setTimeout(function () {
                            $('#prensaNoticia .contentNoticia').html(data);
                        }, 500)
                    }, 500);
                }
            }
        });
    });



    /**
     * @name Evento para animar desplazamiento
     * @description Esta función permite animar el desplazamiento de la pagina por anclas o id
     */
    $('a[href*=#]').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
                && location.hostname === this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target
                    || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top - 60;
                $('html,body')
                        .animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
    });

    /**
     * @name Evento para activar el menú interno
     * @description Este evento permite activar el menú interno.
     */
    $('#productos').click(function () {
        $('.menu_productos').slideToggle(500);
    });

});

/**
 * @name Eventos de scrroll
 * @description Los siguientes eventos se ejecutan al desplazar el scroll del sitio web
 */
$(window).scroll(function () {

    //caso btn nextrading
    if ($(this).scrollTop() > 690 && $(this).scrollTop() < 1400) {
        $('.mainMenu li#btn_nextrading').addClass('active');
    } else {
        $('.mainMenu li#btn_nextrading').removeClass('active');
    }

    //caso btn donde comprar        
    if ($(this).scrollTop() > 1940 && $(this).scrollTop() < 2240) {
        $('.mainMenu li#btn_donde').addClass('active');
    } else {
        $('.mainMenu li#btn_donde').removeClass('active');
    }
    //caso btn contacto        
    if ($(this).scrollTop() > 2250 && $(this).scrollTop() < 2850) {
        $('.mainMenu li#btn_contacto').addClass('active');
    } else {
        $('.mainMenu li#btn_contacto').removeClass('active');
    }

});
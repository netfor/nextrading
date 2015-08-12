<?php get_header(); ?>
<!-- Primera seccion -->
<div id="inicio" class="section">


    <?php if (of_get_option('w2f_banner_principal') != ''): ?>
        <ul class="sliderOnPrensa">
            <?php
            //defino arrglo de la consulta
            $dataConsultaBanner = array(
                'cat' => of_get_option('w2f_banner_principal'),
                'posts_per_page' => 6,
                'orderby' => 'rand'
            );
            $queryBanner = new WP_Query($dataConsultaBanner);
            ?>
            <?php
            if ($queryBanner->have_posts()) :
                while ($queryBanner->have_posts()) : $queryBanner->the_post();
                    ?>
                    <?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_banner'); ?>
                    <li style="background-image: url('<?php echo $image_attr[0] ?>')" class="bg_principal">
                        <img src="<?php echo $image_attr[0] ?>" alt=""/>
                    </li> 
                    <?php
                endwhile;
            endif;
            ?>
        </ul>      
    <?php endif; ?>


    <?php if (of_get_option('w2f_productos_slider') != ''): ?>
        <div id="carrouselInPrensa">
            <ul class="carrouselOnPrensa">

                <?php
                //defino arrglo de la consulta
                $dataConsultaSlider = array(
                    'cat' => of_get_option('w2f_productos_slider'),
                    'posts_per_page' => 20,
                    'orderby' => 'rand'
                );
                $querySlider = new WP_Query($dataConsultaSlider);
                ?>
                <?php
                if ($querySlider->have_posts()) :
                    while ($querySlider->have_posts()) : $querySlider->the_post();
                        ?>
                        <?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_slider'); ?>

                        <li class="opacar">
                            <a href="<?php the_permalink() ?>">
                                <div class="overlay fade"></div>
                                <div class="txtCarrousel fadetext"><?php the_title() ?></div>
                                <img src="<?php echo $image_attr[0] ?>" alt="<?php the_title() ?>" title="<?php the_title() ?>"/>
                            </a>
                        </li>
                        <?php
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
    <?php endif; ?>
</div>
<!-- Fin Primera seccion -->
<?php if (of_get_option('w2f_empresas_articulos') != ''): ?>
    <!-- Segunda seccion -->

    <div id="nextrading" class="section section_explication">

        <div class="contenedor nxtAcerca">

            <?php
            //defino arrglo de la consulta
            $dataConsultaSlider = array(
                'cat' => of_get_option('w2f_empresas_articulos'),
                'posts_per_page' => 2,
                'orderby' => 'ID',
                'order' => 'asc'
            );
            $querySlider = new WP_Query($dataConsultaSlider);
            ?>
            <?php
            $i = 1;
            if ($querySlider->have_posts()) :
                while ($querySlider->have_posts()) : $querySlider->the_post();
                    ?>
                    <?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), true); ?>

                    <div class="columns eight logo">
                        <div class="columns seven lg<?php echo $i ?>">
                            <img src="<?php echo $image_attr[0] ?>" alt="<?php the_title() ?>" title="<?php the_title() ?>"/>
                        </div>
                        <div class="clear"></div>
                        <div class="columns seven txt_nxtAcerca txt<?php echo $i ?>">
                            <?php the_content() ?>
                        </div>
                    </div>
                    <?php
                    $i ++;
                endwhile;
            endif;
            ?>


        </div>


    </div>
    <!-- Fin Segunda seccion -->
<?php endif; ?>
<?php if (of_get_option('w2f_prensa_articulos') != ''): ?>
    <!-- Tercera seccion -->
    <div id="seccion_prensa" class="section">
        <div class="contenedor prensaContent">

            <div class="columns seven" id="prensaCarrusel">
                <h2>Prensa</h2>
                <ul class="carrouselVerInPrensa">

                    <?php
                    //defino arrglo de la consulta
                    $dataConsultaListaArticulos = array(
                        'cat' => of_get_option('w2f_prensa_articulos'),
                        'posts_per_page' => 20,
                        'orderby' => 'ID',
                        'order' => 'asc'
                    );
                    $queryLista = new WP_Query($dataConsultaListaArticulos);
                    ?>
                    <?php
                    if ($queryLista->have_posts()) :
                        while ($queryLista->have_posts()) : $queryLista->the_post();
                            ?>
                            <?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), true); ?>
                            <li>
                                <div class="txtInVer">
                                    <?php the_title() ?>
                                    <br />
                                    <p id="<?php the_ID() ?>" class="ver_mas">{Ver más}</p>
                                </div>
                            </li>
                            <?php
                            $i ++;
                        endwhile;
                    endif;
                    ?>





                </ul>
            </div>


            <div class="columns ten" id="prensaNoticia">
                <div class="contentNoticia transition">


                    <?php
                    //defino arrglo de la consulta
                    $dataConsultaListaArticulos = array(
                        'cat' => of_get_option('w2f_prensa_articulos'),
                        'posts_per_page' => 1,
                        'orderby' => 'ID',
                        'order' => 'asc'
                    );
                    $queryLista = new WP_Query($dataConsultaListaArticulos);
                    ?>
                    <?php
                    if ($queryLista->have_posts()) :
                        while ($queryLista->have_posts()) : $queryLista->the_post();
                            $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_prensa');
                            ?>

                            <img src="<?php echo $image_attr[0] ?>" alt="<?php echo get_the_title() ?>" title="<?php echo get_the_title() ?>" />
                            <h3><?php the_title() ?></h3>
                            <?php the_content() ?>

                            <?php
                            $i ++;
                        endwhile;
                    endif;
                    ?>


                    <div class="clear"></div>




                </div>
                <div id="cambiando">
                    <i class="fa fa-refresh fa-spin"></i> cargando
                </div>
            </div>
        </div>

    </div>
    <div class="clear"></div>
    <!-- Cuarta seccion -->
    <div id="seccionFooter" name="donde-comprar" class="section secFinal">
        <div class="franjaDistribuidores">
            <div class="contenedor">
                <div class="title"><span>¿Cómo comprar?</span></div>
                <div class="clear"></div>
                <div class="columns nine txt1">
                    Trabajamos directamente con Distribuidores o Retailers a nivel Latinoamérica. Entra en contacto con el Product Manager de tu región y te indicarán lo que debes hacer.
                </div>
                <div class="column four btn_franjaDistribuidor">
                    <div class="columns four btnDistribuidor btn1">
                        <a href="<?php echo of_get_option('w2f_como_vinculo') ?>">Distribuidores</a>
                    </div>
                    <div class="clear"></div>
                    <div class="columns four btnDistribuidor btn2">
                        <a href="#"> Quiero ser distribuidor</a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- Simple slider -->
        <div class="contenedor formularios">
            <a name="contacto"></a>
            <div class="columns eight">
                <h3>Contáctenos</h3>
                <?php formcraft(2); ?>
            </div>
            <div  class="columns eight">
                <div class="nxtSk">
                    <div class="column three">
                        <img src="<?php echo get_template_directory_uri(); ?>/userFiles/img/contacto/logo_nxtsk.png" alt=""/>
                    </div>
                    <div class="clear"></div>
                    <div class="columns eight txt_nktSk">
                        <?php echo of_get_option('w2f_contacto_datos'); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Fin Tercera seccion -->

    <!-- Fin Tercera seccion -->
<?php endif; ?>



<script>
    $(window).scroll(function () {
        //caso btn nextrading
        if ($(this).scrollTop() > 600 && $(this).scrollTop() < 1300) {
            $('.mainMenu li#btn_nextrading').addClass('active');
        } else {
            $('.mainMenu li#btn_nextrading').removeClass('active');
        }

        //caso btn donde comprar        
        if ($(this).scrollTop() > 1900 && $(this).scrollTop() < 2200) {
            $('.mainMenu li#btn_donde').addClass('active');
        } else {
            $('.mainMenu li#btn_donde').removeClass('active');
        }
        //caso btn contacto        
        if ($(this).scrollTop() > 2210 && $(this).scrollTop() < 2800) {
            $('.mainMenu li#btn_contacto').addClass('active');
        } else {
            $('.mainMenu li#btn_contacto').removeClass('active');
        }

    });
</script>
<?php
get_footer();

<?php get_header(); ?>

<div class="contenidos">
    <div class="contenedor row">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <div class="contenedor_tip_descripcion">
                    <a href="<?php echo bloginfo('url') ?>/tips" class="titulo_pagina columns four"><i class="fa fa-arrow-left"></i> Regresar a tips</a>
                    <div class="clear"></div>
                    <div class="columns seven img">
                        <?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'img_tips'); ?>
                        <img src="<?php echo $image_attr[0] ?>" alt=""/>
                    </div>
                    <div class="title columns nine">
                        <?php the_title() ?>
                    </div>
                    <div class="columns nine contenido_tip">
                        <?php the_content() ?>
                    </div>
                </div>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5568afc57a7db85e" async="async"></script>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_sharing_toolbox"></div>



                <?php
            endwhile;
        endif;
        ?>	

    </div>
</div> 
<?php get_footer(); ?>
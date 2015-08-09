<?php get_header(); ?>

<div class="contenedor row">
    <div class="contenedor_tip_descripcion">
        <div class="titulo_pagina columns eleven"><h1> <?php the_title(); ?></h1></div>
        <div class="clear"></div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="clear"></div>
                <div class="contenedor">
                    <?php the_content(); ?>
                    <div class="clear"></div>                
                </div>
                <?php
            endwhile;
        endif;
        ?>
        <div class="clear"></div>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5568afc57a7db85e" async="async"></script>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <div class="addthis_sharing_toolbox"></div>    
    </div>

</div>
<?php
get_footer();

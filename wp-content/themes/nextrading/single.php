<?php get_header(); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="contenidos_productos seccion_interna_producto inicio">
            <?php the_content() ?>
        </div>
        <?php
    endwhile;
endif;
?>	
<?php get_footer();
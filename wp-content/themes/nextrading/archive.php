<?php get_header(); ?>
<div class="contenedor">
    <div id="buscar" class="destacados">

 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h1>Artículos para la categoría: &#8216;<?php single_cat_title(); ?>&#8217;</h1>

 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1>Artículos con la etiqueta &#8216;<?php single_tag_title(); ?>&#8217;</h1>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1>Artículos para la fecha: <?php the_time('F jS, Y'); ?></h1>

 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1>Artículos por fecha <?php the_time('F, Y'); ?></h1>

 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1>Archivos del año <?php the_time('Y'); ?></h1>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1>Archivos por autos</h1>

 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1>Artículos del blog</h1>
 	  <?php } ?>

                
       
        <?php if (have_posts()) : ?>
            <?php
            while (have_posts()) : the_post();

                //obtengo la imagen destacada
                $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_leido');
                //obtengo las categorías del artículo
                $valorCategorias = get_the_category(get_the_ID());
                $categoria_print = "";
                $categoria_slug = "";
                foreach ($valorCategorias as $cat) :
                    if ($cat->cat_ID != of_get_option('w2f_inicio_leido') and $cat->cat_ID != of_get_option('w2f_inicio_banner') and $cat->cat_ID != of_get_option('w2f_inicio_destacados')) :
                        $categoria_print .= $cat->cat_name . " ";
                        $categoria_slug .=$cat->slug . " ";
                    endif;
                endforeach;
                ?>

                <div class="item <?php echo $categoria_slug ?>">
                    <?php if ($image_attr): ?>
                        <img src="<?php echo $image_attr[0] ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/userFiles/img/defecto/leido.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                    <?php endif; ?>
                    <?php if ($categoria_print != ''): ?>    
                        <div class="categoria"><?php echo $categoria_print ?></div>
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h3>
                    <p><strong>Fecha: </strong><?php the_time('l, d F Y'); ?></p>
                    <p class="tag"><?php the_tags(''); ?></p>
                    <p> <?php echo substr(get_the_excerpt(), 0, 60) . '...' ?>
                        <a  class="ver_mas" href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">ver más</a>
                </div>

            <?php endwhile; ?>

            <?php getpagenavi(); ?>

        <?php else : ?>

            <h1 class="title">Sin Resultados</h1>
            <p>Lo sentimos, pero usted está buscando algo que no está aquí.</p>

        <?php endif; ?>

    </div>
</div>
<?php get_footer(); ?>
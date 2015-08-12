<?php
/*
  Template Name: Productos
 */
?>
<?php get_header(); ?>

<?php if (of_get_option('w2f_productos_slider1') != ''): ?>
    <!-- Primera seccion -->

    <div class="seccion_interna_producto inicio">
        <?php
        //defino arrglo de la consulta
        $dataConsultaSlider1 = array(
            'cat' => of_get_option('w2f_productos_slider1'),
            'posts_per_page' => 10,
            'orderby' => 'ID',
            'order' => 'asc'
        );
        $querySlider1 = new WP_Query($dataConsultaSlider1);
        ?>
        <ul class="sliderOn1">
            <?php
            if ($querySlider1->have_posts()) :
                $i = 0;
                while ($querySlider1->have_posts()) : $querySlider1->the_post();

                    $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_banner');
                    ?>
                    <li style="background-image: url('<?php echo $image_attr[0] ?>')">
                        <img src="<?php echo $image_attr[0] ?>" alt=""/>
                    </li>

                    <?php
                    $i ++;
                endwhile;
                ?>
                <?php
            endif;
            ?>
        </ul>
    </div>
    <!-- Fin Primera seccion -->
<?php endif; ?>

<?php if (of_get_option('w2f_productos_slider2') != ''): ?>
    <!-- Primera seccion -->
    <div class="seccion_interna_producto">
        <?php
        //defino arrglo de la consulta
        $dataConsultaSlider2 = array(
            'cat' => of_get_option('w2f_productos_slider2'),
            'posts_per_page' => 10,
            'orderby' => 'ID',
            'order' => 'asc'
        );
        $querySlider2 = new WP_Query($dataConsultaSlider2);
        ?>
        
        <ul class="sliderOn2">
            <?php
            if ($querySlider2->have_posts()) :
                $i = 0;
                while ($querySlider2->have_posts()) : $querySlider2->the_post();

                    $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_banner');
                    ?>
                    <li style="background-image: url('<?php echo $image_attr[0] ?>')">
                        <img src="<?php echo $image_attr[0] ?>" alt=""/>
                    </li>

                    <?php
                    $i ++;
                endwhile;
                ?>
                <?php
            endif;
            ?>
        </ul>
    </div>
    <!-- Fin Primera seccion -->
<?php endif; ?>

<?php if (of_get_option('w2f_productos_slider3') != ''): ?>
    <!-- Primera seccion -->
    <div class="seccion_interna_producto">
        <?php
        //defino arrglo de la consulta
        $dataConsultaSlider3 = array(
            'cat' => of_get_option('w2f_productos_slider3'),
            'posts_per_page' => 10,
            'orderby' => 'ID',
            'order' => 'asc'
        );
        $querySlider3 = new WP_Query($dataConsultaSlider3);
        ?>
        <ul class="sliderOn3">
            <?php
            if ($querySlider3->have_posts()) :
                $i = 0;
                while ($querySlider3->have_posts()) : $querySlider3->the_post();

                    $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_banner');
                    ?>
                    <li style="background-image: url('<?php echo $image_attr[0] ?>')">
                        <img src="<?php echo $image_attr[0] ?>" alt=""/>
                    </li>

                    <?php
                    $i ++;
                endwhile;
                ?>
                <?php
            endif;
            ?>
        </ul>
    </div>
    <!-- Fin Primera seccion -->
<?php endif; ?>

<?php if (of_get_option('w2f_productos_slider4') != ''): ?>
    <!-- Primera seccion -->
    <div class="seccion_interna_producto">
        <?php
        //defino arrglo de la consulta
        $dataConsultaSlider4 = array(
            'cat' => of_get_option('w2f_productos_slider4'),
            'posts_per_page' => 10,
            'orderby' => 'ID',
            'order' => 'asc'
        );
        $querySlider4 = new WP_Query($dataConsultaSlider4);
        ?>
        <ul class="sliderOn4">
            <?php
            if ($querySlider4->have_posts()) :
                $i = 0;
                while ($querySlider4->have_posts()) : $querySlider4->the_post();

                    $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_banner');
                    ?>
                    <li style="background-image: url('<?php echo $image_attr[0] ?>')">
                        <img src="<?php echo $image_attr[0] ?>" alt=""/>
                    </li>

                    <?php
                    $i ++;
                endwhile;
                ?>
                <?php
            endif;
            ?>
        </ul>
    </div>
    <!-- Fin Primera seccion -->
<?php endif; ?>

<?php if (of_get_option('w2f_productos_slider5') != ''): ?>
    <!-- Primera seccion -->
    <div class="seccion_interna_producto">
        <?php
        //defino arrglo de la consulta
        $dataConsultaSlider5 = array(
            'cat' => of_get_option('w2f_productos_slider5'),
            'posts_per_page' => 10,
            'orderby' => 'ID',
            'order' => 'asc'
        );
        $querySlider5 = new WP_Query($dataConsultaSlider5);
        ?>
        <ul class="sliderOn5">
            <?php
            if ($querySlider5->have_posts()) :
                $i = 0;
                while ($querySlider5->have_posts()) : $querySlider5->the_post();

                    $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_banner');
                    ?>
                    <li style="background-image: url('<?php echo $image_attr[0] ?>')">
                        <img src="<?php echo $image_attr[0] ?>" alt=""/>
                    </li>

                    <?php
                    $i ++;
                endwhile;
                ?>
                <?php
            endif;
            ?>
        </ul>
    </div>
    <!-- Fin Primera seccion -->
<?php endif; ?>
    
<?php if (of_get_option('w2f_productos_slider6') != ''): ?>
    <!-- Primera seccion -->
    <div class="seccion_interna_producto fin">
        <?php
        //defino arrglo de la consulta
        $dataConsultaSlider6 = array(
            'cat' => of_get_option('w2f_productos_slider6'),
            'posts_per_page' => 10,
            'orderby' => 'ID',
            'order' => 'asc'
        );
        $querySlider6 = new WP_Query($dataConsultaSlider6);
        ?>
        <ul class="sliderOn6">
            <?php
            if ($querySlider6->have_posts()) :
                $i = 0;
                while ($querySlider6->have_posts()) : $querySlider6->the_post();

                    $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_banner');
                    ?>
                    <li style="background-image: url('<?php echo $image_attr[0] ?>')">
                        <img src="<?php echo $image_attr[0] ?>" alt=""/>
                    </li>

                    <?php
                    $i ++;
                endwhile;
                ?>
                <?php
            endif;
            ?>
        </ul>
    </div>
    <!-- Fin Primera seccion -->
<?php endif; ?>


<?php
get_footer();

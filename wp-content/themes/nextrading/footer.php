
<div class="pie_pagina" style="">
    <div class="contenedor" >
        <div class="columns six item-footer">
            <span class="title">Productos</span>
            <?php
            $dataMenu = array(
                'container_id' => 'subnav_hiden',
                'theme_location' => 'productos_footer',
                'menu_id' => 'menu_productos_footer',
                'menu_class' => 'productos',
                'fallback_cb' => 'fallbackmenu'
            );
            wp_nav_menu($dataMenu);
            ?>

        </div>
        <div class="columns three item-footer">
            <span class="title">Nextrading</span>
            <?php
            $dataMenuNext = array(
                'container_id' => 'subnav_hiden',
                'theme_location' => 'nextrading_footer',
                'menu_id' => 'menu_next_footer',
                'menu_class' => '',
                'fallback_cb' => 'fallbackmenu'
            );
            wp_nav_menu($dataMenuNext);
            ?>

        </div>
        <div class="columns four item-footer">
            <span class="title">¿Dónde comprar?</span>
            <?php
            $dataMenuDonde = array(
                'container_id' => 'subnav_hiden',
                'theme_location' => 'donde_footer',
                'menu_id' => 'menu_donde_footer',
                'menu_class' => '',
                'fallback_cb' => 'fallbackmenu'
            );
            wp_nav_menu($dataMenuDonde);
            ?>
        </div>
        <div class="columns three  item-footer">
            <span class="title"><a href="#sec4">Contacto</a></span>
            <?php
            $dataMenuContacto = array(
                'container_id' => 'subnav_hiden',
                'theme_location' => 'contacto_footer',
                'menu_id' => 'menu_contacto_footer',
                'menu_class' => '',
                'fallback_cb' => 'fallbackmenu'
            );
            wp_nav_menu($dataMenuContacto);
            ?>
        </div>
        <div class="clear"></div>
        <div class="separator"></div>
        <div class="columns sixteen footUltimo">
            <?php echo of_get_option('w2f_footer_nombre') ?> - <?php echo of_get_option('w2f_footer_direccion') ?><br />
            <?php echo of_get_option('w2f_footer_telefono') ?> - <?php echo of_get_option('w2f_footer_dominio') ?>
        </div>
    </div>
    <!-- Simple slider -->

</div>   


<?php wp_footer(); ?> 
</body>
</html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/userFiles/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/userFiles/favicon/favicon.ico" type="image/x-icon">
        <!--- Estilos del sitio -->
        <link href="<?php echo get_template_directory_uri(); ?>/userFiles/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/userFiles/css/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/userFiles/css/responsive-style.css" rel="stylesheet" type="text/css"/>        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="<?php echo get_template_directory_uri(); ?>/userFiles/css/jquery.bxslider.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/userFiles/css/menu/slicknav.css" rel="stylesheet" type="text/css"/>
        <!-- Scripts del sitio -->
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/jquery-1.11.1.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/jquery.slimscroll.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/jquery.fullPage.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/main.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/jquery.bxslider.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/menu/jquery.slicknav.js" type="text/javascript"></script>
        <?php wp_head(); ?>   
    </head>
    <body>

        <?php if (of_get_option('w2f_header_logo') != ''): ?>
            <img src="<?php echo of_get_option('w2f_header_logo') ?>" class="logo-responsive" alt="<?php echo bloginfo('name') ?>" title="<?php echo bloginfo('name') ?>"/>
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/userFiles/img/header/logo.png" class="logo-responsive" alt="<?php echo bloginfo('name') ?>" title="<?php echo bloginfo('name') ?>"/>
        <?php endif; ?>
        <header>
            <div class="overlay"></div>
            <div class="contenedor">


                <nav>
                    <ul class="mainMenu">
                        <?php if (is_home()): ?>
                            <li id="productos" ><a>Productos</a></li>
                            <li id="btn_nextrading"><a href="#nextrading">Nextrading</a></li>
                            <li class="logo_header">
                                <a href="#inicio">
                                    <?php if (of_get_option('w2f_header_logo') != ''): ?>
                                        <img src="<?php echo of_get_option('w2f_header_logo') ?>" alt="<?php echo bloginfo('name') ?>" title="<?php echo bloginfo('name') ?>"/>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/userFiles/img/header/logo.png" alt="<?php echo bloginfo('name') ?>" title="<?php echo bloginfo('name') ?>"/>
                                    <?php endif; ?>
                                </a>
                            </li>
                            <li id="btn_donde"><a href="#donde-comprar">¿Dónde comprar?</a></li>
                            <li id="btn_contacto" ><a href="#contacto">Contacto</a></li>
                        <?php else: ?>
                            <li id="productos" class="active"><a>Productos</a></li>
                            <li><a href="<?php echo bloginfo('url') ?>#nextrading">Nextrading</a></li>
                            <li class="logo_header">
                                <a href="<?php echo bloginfo('url') ?>#inicio">
                                    <?php if (of_get_option('w2f_header_logo') != ''): ?>
                                        <img src="<?php echo of_get_option('w2f_header_logo') ?>" alt="<?php echo bloginfo('name') ?>" title="<?php echo bloginfo('name') ?>"/>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/userFiles/img/header/logo.png" alt="<?php echo bloginfo('name') ?>" title="<?php echo bloginfo('name') ?>"/>
                                    <?php endif; ?>
                                </a>
                            </li>
                            <li><a href="<?php echo bloginfo('url') ?>#donde-comprar">¿Dónde comprar?</a></li>
                            <li><a href="<?php echo bloginfo('url') ?>#contacto">Contacto</a></li>

                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
            <div class="menu_productos">
                <div class="contenedor">    
                    <?php wp_nav_menu(array('container_id' => 'subnav', 'theme_location' => 'productos', 'menu_id' => 'productos', 'menu_class' => '', 'fallback_cb' => 'fallbackmenu')); ?>

                </div>
            </div>
        </header>




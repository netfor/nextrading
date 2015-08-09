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
        <link href="<?php echo get_template_directory_uri(); ?>/userFiles/css/estilos.prensa.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/userFiles/css/jquery.fullPage.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
        <link href="<?php echo get_template_directory_uri(); ?>/userFiles/css/jquery.mmenu/jquery.mmenu.all.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="<?php echo get_template_directory_uri(); ?>/userFiles/css/responsive-style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/userFiles/css/jquery.bxslider.css" rel="stylesheet" type="text/css"/>

        <!-- Scripts del sitio -->
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/jquery-1.11.1.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/jquery.slimscroll.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/jquery.fullPage.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/main.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/jquery.mmenu/jquery.mmenu.min.all.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/jquery.bxslider.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/userFiles/js/greensock/TweenMax.min.js" type="text/javascript"></script>
        <?php wp_head(); ?>   
    </head>
    <body>
        <div class="wrapper">
            <a href="#main_menu_responsive" class="opmenu_responsive">
                <div class="overlay"></div>
                <i class="fa fa-bars btn_opmenu"></i>
                <?php if (of_get_option('w2f_header_logo') != ''): ?>
                    <img src="<?php echo of_get_option('w2f_header_logo') ?>" alt="<?php echo bloginfo('name') ?>" title="<?php echo bloginfo('name') ?>"/>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/userFiles/img/header/logo.png" alt="<?php echo bloginfo('name') ?>" title="<?php echo bloginfo('name') ?>"/>
                <?php endif; ?>
            </a>
            <header>
                <div class="overlay"></div>
                <div class="contenedor">
                    <nav>
                        <ul class="mainMenu">
                            <li><a href="index_productos.html">Productos</a></li>
                            <li><a href="#sec1">Nextrading</a></li>
                            <li class="logo_header">
                                <?php if (of_get_option('w2f_header_logo') != ''): ?>
                                    <img src="<?php echo of_get_option('w2f_header_logo') ?>" alt="<?php echo bloginfo('name') ?>" title="<?php echo bloginfo('name') ?>"/>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/userFiles/img/header/logo.png" alt="<?php echo bloginfo('name') ?>" title="<?php echo bloginfo('name') ?>"/>
                                <?php endif; ?>

                            </li>
                            <li><a href="#sec4">¿Dónde comprar?</a></li>
                            <li><a href="#sec4">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
            </header>





            <!-- Simple slider -->
            <div id="fullpage">

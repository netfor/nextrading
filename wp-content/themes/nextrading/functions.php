<?php
require_once('class-tgm-plugin-activation.php');
include ( 'getplugins.php' );
include ( 'metabox.php' );
include ( 'cpt.php' );
include ( 'guide.php' );


/* SIDEBARS */
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Sidebar',
        'before_widget' => '<li class="sidebox %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="sidetitl">',
        'after_title' => '</h3>',
    ));



/* CUSTOM MENUS */

register_nav_menus(array(
    'primary' => __('Principal', ''),
    'productos_footer' => __('Productos Footer', ''),
    'nextrading_footer' => __('nextrading Footer', ''),
    'donde_footer' => __('Donde Footer', ''),
    'contacto_footer' => __('Contacto Footer', ''),
    'productos' => __('Productos', ''),
));

function fallbackmenu() {
    ?>
    <div id="submenu">
        <ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
    </div>
    <?php
}

/* FEATURED THUMBNAILS */

if (function_exists('add_theme_support')) { // Added in 2.9
    add_theme_support('post-thumbnails');
    add_image_size('index_banner', 1100, 600, true);
    add_image_size('index_slider', 170, 170, true);
    add_image_size('index_prensa', 280, 150, true);
}

/* CUSTOM EXCERPTS */

function wpe_excerptlength_aside($length) {
    return 15;
}

function wpe_excerptlength_side($length) {
    return 15;
}

function wpe_excerptlength_archive($length) {
    return 60;
}

function wpe_excerptlength_index($length) {
    return 25;
}

function wpe_excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

/* PAGE NAVIGATION */

function getpagenavi() {
    ?>
    <div id="navigation" class="clearfix">
        <?php if (function_exists('wp_pagenavi')) : ?>
            <?php wp_pagenavi() ?>
        <?php else : ?>
            <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'web2feeel')) ?></div>
            <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'web2feel')) ?></div>
            <div class="clear"></div>
        <?php endif; ?>

    </div>

    <?php
}

//FLUSH REWRITE RULES

function custom_flush_rewrite_rules() {
    global $pagenow, $wp_rewrite;
    if ('themes.php' == $pagenow && isset($_GET['activated']))
        $wp_rewrite->flush_rules();
}

add_action('load-themes.php', 'custom_flush_rewrite_rules');





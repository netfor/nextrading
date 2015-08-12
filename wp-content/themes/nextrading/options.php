<?php

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */
function optionsframework_option_name() {

    // This gets the theme name from the stylesheet (lowercase and without spaces)
    $themename = get_option('stylesheet');
    $themename = preg_replace("/\W/", "_", strtolower($themename));

    $optionsframework_settings = get_option('optionsframework');
    $optionsframework_settings['id'] = $themename;
    update_option('optionsframework', $optionsframework_settings);

    // echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */
function optionsframework_options() {

    // Test data
    $test_array = array("one" => "One", "two" => "Two", "three" => "Three", "four" => "Four", "five" => "Five");

    // Multicheck Array
    $multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");

    // Multicheck Defaults
    $multicheck_defaults = array("one" => "1", "five" => "1");

    // Background Defaults
    $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');


    // Pull all the categories into an array
    $options_categories = array();
    $options_categories_obj = get_categories();
    foreach ($options_categories_obj as $category) {
        $options_categories[$category->cat_ID] = $category->cat_name;
    }

    // Pull all the pages into an array
    $options_pages = array();
    $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
    $options_pages[''] = 'Select a page:';
    foreach ($options_pages_obj as $page) {
        $options_pages[$page->ID] = $page->post_title;
    }

    // If using image radio buttons, define a directory path
    $imagepath = get_bloginfo('stylesheet_directory') . '/images/';

    $options = array();


    $options[] = array("name" => "Header",
        "type" => "heading");


    $options[] = array("name" => "Logo Header",
        "desc" => "Subir la imagen del logo",
        "id" => "w2f_header_logo",
        "std" => "",
        "type" => "upload");

    /*
      $options[] = array("name" => "Imagen Header",
      "desc" => "Subir la imagen del header",
      "id" => "w2f_header_imagen",
      "std" => "",
      "type" => "upload");
     */

    /*     * * inicio ** */

    $options[] = array("name" => "Inicio",
        "type" => "heading");

    $options[] = array("name" => "Banner Principal",
        "desc" => "",
        "id" => "w2f_banner_principal",
        "std" => "",
        "type" => "select",
        "options" => $options_categories);

    $options[] = array("name" => "Slider productos",
        "desc" => "",
        "id" => "w2f_productos_slider",
        "std" => "",
        "type" => "select",
        "options" => $options_categories);

    $options[] = array("name" => "articulos Empresas",
        "desc" => "",
        "id" => "w2f_empresas_articulos",
        "std" => "",
        "type" => "select",
        "options" => $options_categories);

    $options[] = array("name" => "articulos de prensa",
        "desc" => "",
        "id" => "w2f_prensa_articulos",
        "std" => "",
        "type" => "select",
        "options" => $options_categories);

    /*     * * Contacto  * * */

    $options[] = array("name" => "¿Cómo comprar?",
        "type" => "heading");

    $options[] = array("name" => "Vínculo Distribuidores",
        "desc" => "Ingrese el vínculo de distribuidores",
        "id" => "w2f_como_vinculo",
        "std" => "#",
        "type" => "text");


    /*     * * Contacto  * * */

    $options[] = array("name" => "Contacto",
        "type" => "heading");



    $options[] = array("name" => "Datos de contacto",
        "desc" => "",
        "id" => "w2f_contacto_datos",
        "std" => "",
        "type" => "editor");


    $options[] = array("name" => "Productos",
        "type" => "heading");
    
    $options[] = array("name" => "Slider 1",
        "desc" => "",
        "id" => "w2f_productos_slider1",
        "std" => "",
        "type" => "select",
        "options" => $options_categories);
    
    $options[] = array("name" => "Slider 2",
        "desc" => "",
        "id" => "w2f_productos_slider2",
        "std" => "",
        "type" => "select",
        "options" => $options_categories);
    
    $options[] = array("name" => "Slider 3",
        "desc" => "",
        "id" => "w2f_productos_slider3",
        "std" => "",
        "type" => "select",
        "options" => $options_categories);
    
    $options[] = array("name" => "Slider 4",
        "desc" => "",
        "id" => "w2f_productos_slider4",
        "std" => "",
        "type" => "select",
        "options" => $options_categories);
    
    $options[] = array("name" => "Slider 5",
        "desc" => "",
        "id" => "w2f_productos_slider5",
        "std" => "",
        "type" => "select",
        "options" => $options_categories);
    
    $options[] = array("name" => "Slider 6",
        "desc" => "",
        "id" => "w2f_productos_slider6",
        "std" => "",
        "type" => "select",
        "options" => $options_categories);



    $options[] = array("name" => "Footer",
        "type" => "heading");

    $options[] = array("name" => "Nombre",
        "desc" => "ingrese nombre de la compañía",
        "id" => "w2f_footer_nombre",
        "std" => "",
        "type" => "text");

    $options[] = array("name" => "Dirección",
        "desc" => "Ingrese la Dirección",
        "id" => "w2f_footer_direccion",
        "std" => "",
        "type" => "text");

    $options[] = array("name" => "Teléfono",
        "desc" => "Ingrese el valor del teléfono",
        "id" => "w2f_footer_telefono",
        "std" => "",
        "type" => "text");

    $options[] = array("name" => "Dominio",
        "desc" => "Ingrese el valor del dominio",
        "id" => "w2f_footer_dominio",
        "std" => "",
        "type" => "text");

    /*



      $options[] = array("name" => "Nuestros Aliados",
      "desc" => "",
      "id" => "w2f_footer_aliados",
      "std" => "",
      "type" => "editor");


      $options[] = array("name" => "Mensaje condiciones de uso",
      "desc" => "ingrese el texto de las condiciones de uso",
      "id" => "w2f_footer_condiciones",
      "std" => "",
      "type" => "text");

      $options[] = array("name" => "Télefonos de comunicación",
      "desc" => "",
      "id" => "w2f_header_telefonos",
      "std" => "",
      "type" => "editor");

      $options[] = array("name" => "Inicio",
      "type" => "heading");

      $options[] = array("name" => "Categoría de Banner",
      "desc" => "Seleccione entre las categorías existentes para mostrar en el banner",
      "id" => "w2f_slide_categories",
      "type" => "select",
      "options" => $options_categories);

      $options[] = array("name" => "Eventos Destacados lateral",
      "desc" => "",
      "id" => "w2f_inicio_destacados_lateral",
      "std" => "",
      "type" => "editor");

      $options[] = array("name" => "Eventos Destacados lateral Inferior",
      "desc" => "",
      "id" => "w2f_inicio_destacados_lateral1",
      "std" => "",
      "type" => "editor");

      $options[] = array("name" => "Formulario Registro",
      "desc" => "",
      "id" => "w2f_inicio_formulario",
      "std" => "",
      "type" => "editor");

      $options[] = array("name" => "Categoría de Próximamente",
      "desc" => "Seleccione entre las categorías existentes para mostrar en el inicio",
      "id" => "w2f_inicio_proximamente",
      "type" => "select",
      "options" => $options_categories);

      $options[] = array("name" => "Senefa 1",
      "desc" => "",
      "id" => "w2f_inicio_senefa1",
      "std" => "",
      "type" => "editor");

      $options[] = array("name" => "Senefa 2",
      "desc" => "",
      "id" => "w2f_inicio_senefa2",
      "std" => "",
      "type" => "editor");

      $options[] = array("name" => "Carrusel Inicio",
      "type" => "heading");

      $options[] = array("name" => "Categoría de conciertos",
      "desc" => "Seleccione una categoría",
      "id" => "w2f_carrusel_inicio",
      "type" => "select",
      "options" => $options_categories);



      $options[] = array("name" => "YouTube",
      "desc" => "Ingrese el link de cuenta de Youtube",
      "id" => "w2f_redes_youtube",
      "std" => "",
      "type" => "text");

      $options[] = array("name" => "Widget Twitter",
      "desc" => "",
      "id" => "w2f_redes_widget",
      "std" => "",
      "type" => "editor");
      /*
      $options[] = array("name" => "Header",
      "type" => "heading");

      $options[] = array("name" => "Categoría de Banner",
      "desc" => "Seleccione entre las categorías existentes para mostrar en el banner",
      "id" => "w2f_slide_categories",
      "type" => "select",
      "options" => $options_categories);

      $options[] = array("name" => "numero de slide",
      "desc" => "Ingrese únicamente numero sin comas",
      "id" => "w2f_slide_number",
      "std" => "10",
      "type" => "text");

      $options[] = array("name" => "PBX",
      "desc" => "Ingrese el número del PBX.",
      "id" => "w2f_pbx",
      "std" => "PBX",
      "type" => "text");

      $options[] = array("name" => "Email",
      "desc" => "Ingrese su e-mail de contacto.",
      "id" => "w2f_email",
      "std" => "E-mail",
      "type" => "text");

      $options[] = array("name" => "Dirección",
      "desc" => "Ingrese su Dirección",
      "id" => "w2f_direccion",
      "std" => "Dirección",
      "type" => "text");

      $options[] = array("name" => "Ciudad - Pais",
      "desc" => "Ingrese la ciudad y país.",
      "id" => "w2f_ciudadpais",
      "std" => "Dirección - Pais",
      "type" => "text");

      $options[] = array("name" => "Página principal",
      "type" => "heading");

      $options[] = array("name" => "Banner principal",
      "desc" => "Active esta casilla si desea mostrar el banner principal.",
      "id" => "w2f_feat_slide",
      "std" => "1",
      "type" => "checkbox");




      $options[] = array("name" => "Items a presentar",
      "desc" => "Ingrese el número de slides que desea mostrar en el banner.",
      "id" => "w2f_slide_number",
      "std" => "4",
      "class" => "mini",
      "type" => "text");

      $options[] = array("name" => "Frase Principal",
      "desc" => "Seleccione esta casilla si desea mostrar la frase principal.",
      "id" => "w2f_callout_box",
      "std" => "1",
      "type" => "checkbox");

      $options[] = array("name" => "Contenido Frase principal",
      "desc" => "Ingrese la frase principal",
      "id" => "w2f_callout",
      "type" => "text");

      $options[] = array("name" => "Contenido Frase Complementaria",
      "desc" => "Ingrese la frase complementaria",
      "id" => "w2f_callout_secundary",
      "type" => "text");

      $options[] = array("name" => "Articulos destacados",
      "desc" => "Seleccione la categoria que irá en los artículos destacados",
      "id" => "w2f_destacados",
      "type" => "select",
      "options" => $options_categories);

      $options[] = array("name" => "Portfolio page",
      "desc" => "Select the portfolio page",
      "id" => "w2f_port_page",
      "type" => "select",
      "options" => $options_pages);

      $options[] = array("name" => "Blog page",
      "desc" => "Select the blog page",
      "id" => "w2f_blog_page",
      "type" => "select",
      "options" => $options_pages);

      $options[] = array("name" => "Proveedores",
      "desc" => "A continuación se ingresan los cuatro campos de las marcas proveedoras",
      "type" => "info");

      $options[] = array("name" => "Imagen 1",
      "desc" => "Seleccione una imagen de 150 x 150 px (recomendado).",
      "id" => "w2f_sponsor_img_1",
      "std" => "",
      "type" => "upload");

      $options[] = array("name" => "Url 1",
      "desc" => "Ingrese La url de la imagen 1",
      "id" => "w2f_sponsor_url_1",
      "std" => "",
      "type" => "text");

      $options[] = array("name" => "Imagen 2",
      "desc" => "Seleccione una imagen de 150 x 150 px (recomendado).",
      "id" => "w2f_sponsor_img_2",
      "std" => "",
      "type" => "upload");

      $options[] = array("name" => "Url 2",
      "desc" => "Ingrese La url de la imagen 2",
      "id" => "w2f_sponsor_url_2",
      "std" => "",
      "type" => "text");

      $options[] = array("name" => "Imagen 3",
      "desc" => "Seleccione una imagen de 150 x 150 px (recomendado).",
      "id" => "w2f_sponsor_img_3",
      "std" => "",
      "type" => "upload");

      $options[] = array("name" => "Url 3",
      "desc" => "Ingrese La url de la imagen 3",
      "id" => "w2f_sponsor_url_3",
      "std" => "",
      "type" => "text");

      $options[] = array("name" => "Imagen 4",
      "desc" => "Seleccione una imagen de 150 x 150 px (recomendado).",
      "id" => "w2f_sponsor_img_4",
      "std" => "",
      "type" => "upload");

      $options[] = array("name" => "Url 4",
      "desc" => "Ingrese La url de la imagen 4",
      "id" => "w2f_sponsor_url_4",
      "std" => "",
      "type" => "text");

      $options[] = array("name" => "Nosotros",
      "type" => "heading");

      $options[] = array("name" => "Imagen Destacada",
      "desc" => "Seleccione una imagen de 1000 x 170 px (recomendado).",
      "id" => "w2f_nosotros_img",
      "std" => "",
      "type" => "upload");

      $options[] = array("name" => "Nosotros",
      "desc" => "",
      "id" => "w2f_nosotros",
      "std" => "",
      "type" => "editor");

      $options[] = array("name" => "Nosotros",
      "desc" => "",
      "id" => "w2f_nosotros_beneficios",
      "std" => "",
      "type" => "editor");

      $options[] = array("name" => "Mensaje Final",
      "desc" => "Ingrese el mensaje final",
      "id" => "w2f_nosotros_mensaje",
      "std" => "",
      "type" => "text");

      $options[] = array("name" => "Audiología",
      "type" => "heading");

      $options[] = array("name" => "Imagen Destacada",
      "desc" => "Seleccione una imagen de 1000 x 170 px (recomendado).",
      "id" => "w2f_audiologia_img",
      "std" => "",
      "type" => "upload");

      $options[] = array("name" => "Mesaje",
      "desc" => "Ingrese el mensaje",
      "id" => "w2f_audiologia_mensaje",
      "std" => "",
      "type" => "text");

      $options[] = array("name" => "Audiología",
      "desc" => "",
      "id" => "w2f_audiologia_audiologia",
      "std" => "",
      "type" => "editor");

      $options[] = array("name" => "Fonoaudiología",
      "type" => "heading");

      $options[] = array("name" => "Imagen Destacada",
      "desc" => "Seleccione una imagen de 1000 x 170 px (recomendado).",
      "id" => "w2f_fonoaudiologia_img",
      "std" => "",
      "type" => "upload");

      $options[] = array("name" => "Mensaje",
      "desc" => "Ingrese el mensaje de fonoaudiología",
      "id" => "w2f_fonoaudiologia_mensaje",
      "std" => "",
      "type" => "text");

      $options[] = array("name" => "Fonoaudiología",
      "desc" => "",
      "id" => "w2f_fonoaudiologia_fonoaudiologia",
      "std" => "",
      "type" => "editor");

      $options[] = array("name" => "Contacto",
      "type" => "heading");

      $options[] = array("name" => "Imagen Destacada",
      "desc" => "Seleccione una imagen de 1000 x 170 px (recomendado).",
      "id" => "w2f_contacto_img",
      "std" => "",
      "type" => "upload");

      $options[] = array("name" => "Mapa de ubicación",
      "desc" => "coloque el codigo de google maps con el mapa de ubicación",
      "id" => "w2f_contacto_ubicacion",
      "std" => "",
      "type" => "editor");
      $options[] = array( "name" => "Datos de contacto complementario",
      "desc" => "La siguiente información es complementaria a la información de contacto y solo aparecerá la página de contacto.",
      "type" => "info");

      $options[] = array("name" => "Celular",
      "desc" => "Número de celular",
      "id" => "w2f_contacto_celular",
      "std" => "",
      "type" => "text");

      $options[] = array("name" => "Correo Complementario 1",
      "desc" => "Correo electrónico",
      "id" => "w2f_contacto_email1",
      "std" => "",
      "type" => "text");
      $options[] = array("name" => "Correo Complementario 2",
      "desc" => "Correo electrónico",
      "id" => "w2f_contacto_email2",
      "std" => "",
      "type" => "text");

     */
    // 	
    // $options[] = array( "name" => "Basic Settings",
    // 					"type" => "heading");
    // 						
    // $options[] = array( "name" => "Input Text Mini",
    // 					"desc" => "A mini text input field.",
    // 					"id" => "example_text_mini",
    // 					"std" => "Default",
    // 					"class" => "mini",
    // 					"type" => "text");
    // 							
    // $options[] = array( "name" => "Input Text",
    // 					"desc" => "A text input field.",
    // 					"id" => "example_text",
    // 					"std" => "Default Value",
    // 					"type" => "text");
    // 						
    // $options[] = array( "name" => "Textarea",
    // 					"desc" => "Textarea description.",
    // 					"id" => "example_textarea",
    // 					"std" => "Default Text",
    // 					"type" => "textarea"); 
    // 					
    // $options[] = array( "name" => "Input Select Small",
    // 					"desc" => "Small Select Box.",
    // 					"id" => "example_select",
    // 					"std" => "three",
    // 					"type" => "select",
    // 					"class" => "mini", //mini, tiny, small
    // 					"options" => $test_array);			 
    // 					
    // $options[] = array( "name" => "Input Select Wide",
    // 					"desc" => "A wider select box.",
    // 					"id" => "example_select_wide",
    // 					"std" => "two",
    // 					"type" => "select",
    // 					"options" => $test_array);
    // 					
    // $options[] = array( "name" => "Select a Category",
    // 					"desc" => "Passed an array of categories with cat_ID and cat_name",
    // 					"id" => "example_select_categories",
    // 					"type" => "select",
    // 					"options" => $options_categories);
    // 					
    // $options[] = array( "name" => "Select a Page",
    // 					"desc" => "Passed an pages with ID and post_title",
    // 					"id" => "example_select_pages",
    // 					"type" => "select",
    // 					"options" => $options_pages);
    // 					
    // $options[] = array( "name" => "Input Radio (one)",
    // 					"desc" => "Radio select with default options 'one'.",
    // 					"id" => "example_radio",
    // 					"std" => "one",
    // 					"type" => "radio",
    // 					"options" => $test_array);
    // 						
    // $options[] = array( "name" => "Example Info",
    // 					"desc" => "This is just some example information you can put in the panel.",
    // 					"type" => "info");
    // 										
    // $options[] = array( "name" => "Input Checkbox",
    // 					"desc" => "Example checkbox, defaults to true.",
    // 					"id" => "example_checkbox",
    // 					"std" => "1",
    // 					"type" => "checkbox");
    // 					
    // $options[] = array( "name" => "Advanced Settings",
    // 					"type" => "heading");
    // 					
    // $options[] = array( "name" => "Check to Show a Hidden Text Input",
    // 					"desc" => "Click here and see what happens.",
    // 					"id" => "example_showhidden",
    // 					"type" => "checkbox");
    // 
    // $options[] = array( "name" => "Hidden Text Input",
    // 					"desc" => "This option is hidden unless activated by a checkbox click.",
    // 					"id" => "example_text_hidden",
    // 					"std" => "Hello",
    // 					"class" => "hidden",
    // 					"type" => "text");
    // 					
    // $options[] = array( "name" => "Uploader Test",
    // 					"desc" => "This creates a full size uploader that previews the image.",
    // 					"id" => "example_uploader",
    // 					"type" => "upload");
    // 					
    // 
    // 					
    // $options[] = array( "name" =>  "Example Background",
    // 					"desc" => "Change the background CSS.",
    // 					"id" => "example_background",
    // 					"std" => $background_defaults, 
    // 					"type" => "background");
    // 							
    // $options[] = array( "name" => "Multicheck",
    // 					"desc" => "Multicheck description.",
    // 					"id" => "example_multicheck",
    // 					"std" => $multicheck_defaults, // These items get checked by default
    // 					"type" => "multicheck",
    // 					"options" => $multicheck_array);
    // 						
    // $options[] = array( "name" => "Colorpicker",
    // 					"desc" => "No color selected by default.",
    // 					"id" => "example_colorpicker",
    // 					"std" => "",
    // 					"type" => "color");
    // 					
    // $options[] = array( "name" => "Typography",
    // 					"desc" => "Example typography.",
    // 					"id" => "example_typography",
    // 					"std" => array('size' => '12px','face' => 'verdana','style' => 'bold italic','color' => '#123456'),
    // 					"type" => "typography");			
    return $options;
}

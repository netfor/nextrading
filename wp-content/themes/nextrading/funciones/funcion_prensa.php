
<?php
// Include the wp-load'er
include '../../../../wp-load.php';




if (isset($_POST['id'])) :
    
   
    //creo la variable de retorno
    $valorRetorno = '';
    //defino arrglo de la consulta
    $dataConsulta = array(
        'p' => $_POST['id']
    );
    //realizo la consulta
    $dataEventos = new WP_Query($dataConsulta);
    //valido la existencia del contenido
    if ($dataEventos->have_posts()) :
        //itero el contenido
        while ($dataEventos->have_posts()) : $dataEventos->the_post();
            $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_prensa');
            $valorRetorno .= '<img src="'.$image_attr[0].'" alt="'. get_the_title() .'" title="'.get_the_title().'" />';
            $valorRetorno .= '<h3>'.get_the_title().'</h3>';
            $valorRetorno .= nl2br(get_the_content());
        endwhile;
    endif;
    //devuelvo el valor retorno
    echo $valorRetorno;

else:
    echo "<script type='text/javascript'>location.href='http://' + document.domain</script>";
endif;
?>



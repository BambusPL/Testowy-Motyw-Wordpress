                                    <?php
                                        if (get_field('info_box_content'))
                                        {
                                        echo '<div class="info-box">';
                                        echo '<h2>' . get_field('info_box_title') . '</h2>';
                                        the_field('info_box_content');
                                        echo '</div';
                                        }

                                    ?>
                                    
                                   
                                   function moje_skrypty() {

    wp_enqueue_script('jquery'); 

    /*   Rejestracja JS*/
   
    wp_register_script('bootstrap',get_stylesheet_directory_uri().'/js/bootstrap.min.js');
    wp_register_script('odliczanie',get_stylesheet_directory_uri().'/js/jquery.counterup.min.js');
    wp_register_script('waypoints',get_stylesheet_directory_uri().'/js/jquery.waypoints.min.js');
    wp_register_script('przewijanie',get_stylesheet_directory_uri().'/js/smooth-scroll.js', array('jquery'));
    wp_register_script('moje-skrypty',get_stylesheet_directory_uri().'/js/moje.js', array('jquery'));
     
     
 

    /*   rejestracja CSS */
    wp_register_style('glowne-style',get_stylesheet_directory_uri().'/style.css');
    wp_register_style('responsywnosc',get_stylesheet_directory_uri().'/responsywnosc.css');
    wp_register_style('bootstrap-css',get_stylesheet_directory_uri().'/css/bootstrap.min.css');
    wp_register_style('fa',get_stylesheet_directory_uri().'/css/font-awesome.min.css');
    wp_register_style('hover',get_stylesheet_directory_uri().'/css/hover-min.css');
   
    
      /*   Wywoływanie skryptow */
    wp_enqueue_script('glowny-jq');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('odliczanie');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('przewijanie');
    wp_enqueue_script('moje-skrypty');


   /* Wywoływanie styli */
    wp_enqueue_style( 'glowne-style', get_stylesheet_uri(), array() );
    wp_enqueue_style('responsywnosc');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('fa');
    wp_enqueue_style('hover');
   
}
add_action( 'wp_enqueue_scripts', 'moje_skrypty' ); 




<?php
 
function register_my_menus() {
 
  register_nav_menus(
 
    array(
 
      'poziome-menu' => __( 'Poziome menu glowne' )
 
    )
 
  );
 
}
 
add_action( 'init', 'register_my_menus' );
?>


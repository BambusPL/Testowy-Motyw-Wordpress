<?php
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
?>

<?php 

add_theme_support( 'post-thumbnails' );

// dlugosc znakow w excerpt
function set_excerpt_length(){
    return 50;
    
}

add_filter('excerpt_length', 'set_excerpt_length');

//widgety

function wpb_init_widgets($id){
    register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="aside-sekcja text-left">',
    'after_widget' => '</div><hr>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
    ));
}

add_action('widgets_init', 'wpb_init_widgets');

//wlasne widgety 
 register_sidebar(array(
    'name' => 'Stopka-left',
    'id' => 'footer-left',
      'description' => 'Dodaj opis, użyj widgetu text, pamiętaj, żeby tekst zawsze był pomiędzy <p> </p>, np
      <p>Ala ma kota</p>',
    'before_widget' => '<div class="footer-l">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3><hr>'
    ));

 register_sidebar(array(
    'name' => 'Stopka-Center',
    'id' => 'footer-center',
      'description' => 'Dodaj opis, użyj widgetu text, pamiętaj, żeby tekst zawsze był pomiędzy <p> </p>, np
      <p>Ala ma kota</p>',
    'before_widget' => '<div class="footer-c">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3><hr>'
    ));


 register_sidebar(array(
    'name' => 'Stopka-right',
    'id' => 'footer-right',
      'description' => 'Dodaj opis, użyj widgetu text, pamiętaj, żeby tekst zawsze był pomiędzy <p> </p>, np
      <p>Ala ma kota</p>',
    'before_widget' => '<div class="footer-r">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3><hr>'
    ));


function my_home_page_posts( $query ) {
    if ( ! is_admin() && $query->is_home() && $query->is_main_query() ) {
        $query->set( 'category__not_in', array( get_cat_ID('Sklep', 'Galeria') ) );
    }

    return $query;
}


add_action( 'pre_get_posts', 'my_home_page_posts' );


 function moje_skrypty() {

   
 wp_enqueue_script('jquery'); 
    /*   Rejestracja JS*/
   
  
  
    wp_register_script('bootstrap',get_stylesheet_directory_uri().'/js/bootstrap.min.js');
    wp_register_script('odliczanie',get_stylesheet_directory_uri().'/js/jquery.counterup.min.js'  );
    wp_register_script('waypoints',get_stylesheet_directory_uri().'/js/jquery.waypoints.min.js');
    wp_register_script('przewijanie',get_stylesheet_directory_uri().'/js/smooth-scroll.js' );
    wp_register_script('odliczanie-skrypt',get_stylesheet_directory_uri().'/js/odl.js');
    wp_register_script('menu',get_stylesheet_directory_uri().'/js/menu.js');
    wp_register_script('lightbox',get_stylesheet_directory_uri().'/js/ekko-lightbox.min.js', array('jquery'));
    wp_register_script('lightbox-skrypt',get_stylesheet_directory_uri().'/js/lightbox.js', array('lightbox'));
   
     
     
 

    /*   rejestracja CSS */

    wp_register_style('bootstrap-css',get_stylesheet_directory_uri().'/css/bootstrap.min.css');
       wp_register_style('glowne-style',get_stylesheet_directory_uri().'/style.css');
       wp_register_style('responsywnosc',get_stylesheet_directory_uri().'/responsywnosc.css');
    wp_register_style('fa',get_stylesheet_directory_uri().'/css/font-awesome.min.css');
    wp_register_style('hover',get_stylesheet_directory_uri().'/css/hover-min.css');
    wp_register_style('lightbox',get_stylesheet_directory_uri().'/css/ekko-lightbox.min.css');
     
     
 }

add_action('init', 'moje_skrypty');
   
   function mytheme_enqueue_scripts(){ 
      /*   Wywoływanie skryptow */
        
 
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('odliczanie');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('przewijanie');
    wp_enqueue_script('menu');
    wp_enqueue_script('odliczanie-skrypt');
    wp_enqueue_script('lightbox');
    wp_enqueue_script('lightbox-skrypt');


   /* Wywoływanie styli */

    wp_enqueue_style('bootstrap-css');
       
    wp_enqueue_style('fa');
    wp_enqueue_style('hover');
    wp_enqueue_style('lightbox');
       wp_enqueue_style( 'glowne-style' );
    wp_enqueue_style('responsywnosc');}
   

add_action('wp_print_scripts', 'mytheme_enqueue_scripts');



// Woo-commerce










?>

<?php // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
?>












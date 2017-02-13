<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1">


  <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/kontakt.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,600,600i,700,700i,800,900|Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">
  </head>

   <?php wp_head(); ?>
 
  
  <body>
  
  <header id="HEADER">
    <!-- menu -->
    
                     <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top menu">
                     <div class="container">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand hvr-bounce-in" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
 <?php
				wp_nav_menu( array(
					'menu'              => 'Testing Menu',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
				);
			?>
  </div>
   </div>
</nav>
   
 
     
          <div class="container">
             
              <div class="col-md-8 offset-md-2 text-center">
                 
                  <h2><?php bloginfo('name'); ?></h2>
                  <h1>
                      <?php bloginfo('description'); ?>
                  </h1>
                  <hr>
                  <div class="przycisk-header">
                  <a href="#
                      
                  " class="btn btn-primary hvr-buzz ">Zapraszam</a></div>
              </div>
          </div>
         
      
  </header>
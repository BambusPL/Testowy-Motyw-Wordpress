<?php get_header() ?>


    <section id="wlasna-strona">
       
       
   
           
           	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content' );


			// End of the loop.
		endwhile;
		?>

           
 
            
            <?php if(is_page('kontakt')) : ?> 
            <?php get_template_part('kontakt') ?>
            <?php endif ?>
            
           
            
              <?php if(is_page('galeria')) : ?> 
            <?php get_template_part('Galeria') ?>
            <?php endif ?>
           
       
        
        
    </section>
    
   <?php get_footer(); ?>

   <?php get_header() ?>

   
   <section id="blog">
    <div class="container-fluid">
         <div class="row">
             <article class="col-md-6 offset-md-1">
                   <?php if ( have_posts() ) : ?>
                       
                    <?php while ( have_posts() ) : the_post(); ?>
                          <div class="tytul text-center">
                              <h2><?php the_title(); ?></h2>
                                  
                                      <hr>
                                         <div class="zdjecie">
                                             <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post-icon') ; } ?>
                                         </div>
                                          <p><?php the_excerpt(); ?></p>
                                          <a href="<?php the_permalink(); ?>"><button class="btn">Czytaj dalej...</button></a>
                          </div>
                        <?php endwhile; ?>
                            <?php else : ?>

                                <p>
                                    <?php _e('Nie ma nowych postów'); ?>
                                </p>

                                <?php endif; ?>
             </article>
             <div class="col-md-2 offset-md-1 side-bar">
                   <?php if(is_active_sidebar('sidebar')): ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                        <?php endif; ?>
             </div>
         </div>
    </div>
</section>


<?php get_footer() ?>
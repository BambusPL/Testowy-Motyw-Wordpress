<?php
get_header() ?>
    <section id="blog">
        <div class="container-fluid">
           
            <div class="row">
                <article class="col-md-6 offset-md-1">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <div class="tytul text-center">
                                <h2><?php the_title(); ?></h2>
                                <hr>
                                <div class="zdjecie">
                                  
                                  <?php if (has_post_thumbnail()) {the_post_thumbnail('post-icon');} ?>
                                
                                </div>
                                <div class="opis">
                                    <p>
                                        <?php the_content(); ?>
                                        
                                         <?php 

                            $image = get_field('dodaj_zdj');

                            if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['obrazek']; ?>" />

                                        <?php endif; ?>
                                    </p>
                                   </div>
                                    
                                    
                                    <?php if(in_category('12')) :?>
                                    <?php get_template_part('sklep-duzy'); ?>
                                    <?php endif; ?>
                                  
                            </div>
                            
                            
                            <?php endwhile; ?>
                                <?php else: ?>
                                    <p>
                                        <?php _e('Nie ma nowych postów'); ?>
                                    </p>
                                    <?php
endif; ?>
                </article>
                <div class="col-md-2 offset-md-1 side-bar">
                    <?php

if (is_active_sidebar('sidebar')): ?>
                        <?php
	dynamic_sidebar('sidebar'); ?>
                            <?php
endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php
get_footer() ?>
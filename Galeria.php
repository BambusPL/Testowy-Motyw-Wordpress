<section id="galeria">
    <div class="container">
        <div class="row">
              <?php if ( have_posts() ) : ?>
                    <?php query_posts('cat=13'); ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <div class="col-md-4 ">
                               
                                <div class="fotka-galeria">
                                    <?php 

                            $image = get_field('zdjecie-galeria');

                            if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['obrazek']; ?>" />

                                        <?php endif; ?>
                                
                                
                                
                                       <?php 

                            $image = get_field('zdjecie-galeria');

                            if( !empty($image) ): ?>

                                        <a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="example-gallery" data-type="image">
                                            <span class="zdjecia-overlay"></span>
                                        </a>

                                        <?php endif; ?>
                              
                           </div>
                            </div>

                            <?php endwhile; ?>
                                <?php else : ?>

                                    <p>
                                        <?php _e('Nie ma nowych postów'); ?>
                                    </p>

                                    <?php endif; ?>

                                        <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
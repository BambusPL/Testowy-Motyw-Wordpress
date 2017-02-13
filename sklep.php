<?php get_header() ?>

    <section id="sklep">
        <div class="container">

            <div class="row">

                <?php if ( have_posts() ) : ?>
                    <?php query_posts('cat=12'); ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <div class="col-md-4 text-center">
                               <div class="obiekt">
                                <div class="zdj">
                                    <?php 

                            $image = get_field('zdjecie');

                            if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['obrazek']; ?>" />

                                        <?php endif; ?>
                                </div>
                                <div class="opis">
                                    <h3><?php the_title(); ?></h3>
                                    <p>
                                        <?php the_content(); ?>
                                    </p>
                                    <hr>
                                    <p>Cena: <span><?php the_field('cena'); ?> zł</span></p>
                                    <a href="<?php the_permalink(); ?>"><button class="btn">Czytaj dalej...</button></a>

                                </div>
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


    <?php get_footer(); ?>
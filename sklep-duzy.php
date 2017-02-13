<div id="sklep-duzy">
                             <div class="zdj">
                                    <?php 

                            $image = get_field('zdjecie');

                            if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['obrazek']; ?>" />

                                        <?php endif; ?>
                                </div>
                                <div class="opis">
                                    
                                    <hr>
                                    <p>Cena: <span><?php the_field('cena'); ?> zł</span></p>
                                    

                                </div>

</div>




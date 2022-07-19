<?php $backgroundPattern = get_sub_field('background_pattern'); ?>
<?php if( have_rows('services_options') ): ?>
        <div class="services">
            <img class="pattern" src="<?php echo($backgroundPattern['sizes']['onqor-large'])?>" />
            <div class="services__container">
                <?php while( have_rows('services_options') ): the_row(); 
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $image = get_sub_field('photo');
                    ?>
                    <div class="services__container__cards-container">
                        <h5><?php echo($title) ?></h5>
                        <div class="services__container__cards-container__card">
                            <div class="services__container__cards-container__card__paragraph">
                                <?php echo($text) ?>
                            </div>
                            <img src="<?php echo($image["sizes"]["onqor-logo"]) ?>" />
                        </div>
                    </div> 
                <?php endwhile; ?>
            </div>
        </div>
<?php endif; ?>
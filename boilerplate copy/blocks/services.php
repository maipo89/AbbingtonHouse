<?php $backgroundPattern = get_sub_field('background_pattern'); ?>
<?php if( have_rows('services_options') ): ?>
        <div class="services">
            <img class="pattern" alt="<?php echo($backgroundPattern['alt'])?>" src="<?php echo($backgroundPattern['sizes']['onqor-large'])?>" />
            <div class="services__container">
                <?php while( have_rows('services_options') ): the_row(); 
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $image = get_sub_field('photo');
                    ?>
                    <div class="services__container__cards-container">
                        <h2><?php echo($title) ?></h2>
                        <div class="services__container__cards-container__card">
                            <div class="services__container__cards-container__card__paragraph">
                                <?php echo($text) ?>
                            </div>
                            <img width="<?php echo($image["sizes"]["onqor-logo-width"]) ?>" height="<?php echo($image["sizes"]["onqor-logo-height"]) ?>" alt="<?php echo($image["alt"]) ?>" src="<?php echo($image["sizes"]["onqor-logo"]) ?>" />
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
<?php endif; ?>
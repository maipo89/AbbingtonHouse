<?php $logo = get_sub_field('logo'); ?>

<div class="testimonial">

    <div class="testimonial__logo">
        <img width="<?php echo($logo["sizes"]["onqor-hd-width"]) ?>" height="<?php echo($logo["sizes"]["onqor-hd-height"]) ?>" alt='<?php echo($logo["alt"]) ?>' src='<?php echo($logo["sizes"]["onqor-hd"]) ?>'>
    </div>

    <?php if( have_rows('comments') ): ?>
        <div class="testimonial__slider">
            <?php while( have_rows('comments') ): the_row(); 
                  $text = get_sub_field('text');
                  $name = get_sub_field('name');
                  $relation = get_sub_field('relation');
            ?>
                <div>
                   <p><?php echo($text) ?></p>
                   <p><strong><?php echo($name) ?></strong>, <?php echo($relation) ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>
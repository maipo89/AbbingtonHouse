<?php $text = get_sub_field('text');
      $links = get_sub_field('links'); ?>

<div class="slider-link">

    <?php if( have_rows('slider') ): ?>
        <div class="slider-link__slider">
            <?php while( have_rows('slider') ): the_row(); 
                $photo = get_sub_field('photo');
                ?>
                <img width="<?php echo($photo["sizes"]["onqor-hd-width"]) ?>" height="<?php echo($photo["sizes"]["onqor-hd-height"]) ?>" alt='<?php echo($photo["alt"]) ?>' src='<?php echo($photo["sizes"]["onqor-hd"]) ?>'>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <p><?php echo($text) ?></p>
    <div class="slider-link__links">
        <?php if( have_rows('links') ): ?>
            <?php while( have_rows('links') ): the_row(); 
                $linkUrl = get_sub_field('link_url');
                $linkText = get_sub_field('link_text');
                ?>
                <a target="_blank" href="<?php echo($linkUrl) ?>"><?php echo($linkText) ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>
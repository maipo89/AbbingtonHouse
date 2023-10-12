
<?php $button = get_sub_field('button');
      $buttonText = get_sub_field('button_text');
      $buttonLink = get_sub_field('button_link');
?>
<?php if( have_rows('text_area') ): ?>
        <div class="two-columns">
            <div class="two-columns__container">
                <?php while( have_rows('text_area') ): the_row(); 
                    $title = get_sub_field('title');
                    $paragraph = get_sub_field('paragraph');
                    ?>
                    <div class="two-columns__column">
                        <h2><?php echo($title) ?></h2>
                        <p><?php echo($paragraph) ?></p>
                    </div>
                    <!-- <div class="line"></div> -->
                <?php endwhile; ?>
                <?php if( $button ): ?>
                <div class="two-columns__button">
                    <a class="secondary-button" href="<?php echo($buttonLink["url"]) ?>" ><?php echo($buttonText) ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
<?php endif; ?>

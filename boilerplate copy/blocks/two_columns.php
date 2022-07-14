<?php if( have_rows('text_area') ): ?>
        <div class="two-columns">
            <?php while( have_rows('text_area') ): the_row(); 
                $title = get_sub_field('title');
                $paragraph = get_sub_field('paragraph');
                ?>
                <div class="two-columns__column">
                    <h2><?php echo($title) ?></h2>
                    <p><?php echo($paragraph) ?></p>
                </div>
                <div class="line"></div>
            <?php endwhile; ?>
        </div>
<?php endif; ?>
<?php if( have_rows('admission_options') ): ?>
        <div class="admission">
            <?php while( have_rows('admission_options') ): the_row(); 
                $title = get_sub_field('title');
                $paragraph = get_sub_field('paragraph');
                ?>
                <h5><p><?php echo($title) ?></p><div class="arrow"></h5>
                <div class="admission__content">
                    <?php echo($paragraph) ?>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="last-row-container">
            <div class="last-row"></div>
        </div>
<?php endif; ?>
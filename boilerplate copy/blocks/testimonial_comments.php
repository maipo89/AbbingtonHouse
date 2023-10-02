<?php
  $pages = get_sub_field('pages');
?>

<div class="testimonial-comments">
    <p class="testimonial-comments__paragraph"><?php echo $paragraph; ?></p>

    <div class="testimonial-comments__container">

        <?php if( have_rows('pages') ): ?>
            <?php while( have_rows('pages') ): the_row(); 
                ?>
                    <div class="page">

                        <?php if( have_rows('comments') ): ?>
                            <?php while( have_rows('comments') ): the_row(); ?>

                            <?php $author = get_sub_field('author'); ?>
                            <?php $admission = get_sub_field('admission_day'); ?>
                            <?php $dismissal = get_sub_field('dismissal_day'); ?>
                            <?php $comment_text = get_sub_field('comment'); ?>
                            
                            <div class="testimonial-comments__content">

                                <p class="author"><strong><?php echo $author; ?></strong>, <?php echo $admission; ?> - <?php echo $dismissal; ?></p>
                                <p class="comment"><?php echo $comment_text; ?></p>
                                <div class="line"></div>

                            </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>

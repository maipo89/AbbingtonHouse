<?php 
    $titleLegal = get_sub_field('title');
    $paragraphLegal = get_sub_field('paragraph');
?>

<div class="legal">
    <div class="legal__links">
        <a href="<?php get_home_url(); ?>/cookie-policy/">Cookies</a>
        <a href="<?php get_home_url(); ?>/privacy-policy/">Privacy Policy</a>
        <a href="<?php get_home_url(); ?>/terms-conditions/">Terms & Conditions</a>
    </div>
    <h1><?php echo($titleLegal) ?></h1>
    <?php echo($paragraphLegal) ?>
    <?php if( have_rows('text_area') ): ?>
        <?php while( have_rows('text_area') ): the_row(); 
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            ?>
            <h2><?php echo($title) ?></h2>
            <?php echo($paragraph) ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
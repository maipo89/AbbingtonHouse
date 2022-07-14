<?php $backgroundPattern = get_sub_field('background_pattern');
      $title = get_sub_field('title');
?>

<div class="team">
    <img class="team__pattern" src="<?php echo($backgroundPattern["sizes"]["onqor-large"]) ?>" />
    <div class="team__container">
        <h2><?php echo($title) ?></h2>
        <?php if( have_rows('team_cards') ): ?>
            <div class="team__container__cards-container">
                <?php while( have_rows('team_cards') ): the_row(); 
                    $name = get_sub_field('name');
                    $job = get_sub_field('job');
                    $photo = get_sub_field('photo');
                    ?>
                    <div class="team__container__cards-container__card">
                        <div class="photo" style='background-image: url("<?php echo($photo["sizes"]["onqor-large"]) ?>")'></div>
                        <div class="name">
                            <p><?php echo($name) ?></p>
                            <p><?php echo($job) ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
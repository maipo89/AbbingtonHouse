<?php $backgroundPattern = get_sub_field('background_pattern');
      $title = get_sub_field('title');
?>

<div class="team">
    <img class="team__pattern" alt="<?php echo($backgroundPattern["alt"]) ?>" src="<?php echo($backgroundPattern["sizes"]["onqor-large"]) ?>" />
    <div class="team__container">
        <h1><?php echo($title) ?></h1>
        <?php if( have_rows('team_cards') ): ?>
            <div class="team__container__cards-container">
                <?php while( have_rows('team_cards') ): the_row(); 
                    $name = get_sub_field('name');
                    $job = get_sub_field('job');
                    $photo = get_sub_field('photo');
                    $bio = get_sub_field('bio');
                    ?>
                    <div class="team__container__cards-container__card">
                        <div class="photo">
                            <img src="<?php echo($photo["sizes"]["onqor-large"]) ?>" alt="<?php echo($photo["alt"]) ?>">
                            <div class="bio">
                                <p><?php echo($bio) ?></p>
                            </div>
                        </div>
                        
                        <div class="info">
                            <div class="name">
                                <p><?php echo($name) ?></p>
                                <p><?php echo($job) ?></p>
                            </div>
                            <p class="bio-mobile"><?php echo($bio) ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
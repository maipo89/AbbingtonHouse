<?php $title = get_sub_field('title');
      $text = get_sub_field('text');
      $image = get_sub_field('image');
      $bottomText = get_sub_field('bottom_text');
?>

<div class="paragraph-image">
    <div class="paragraph-image__container">
        <div style='background-image: url("<?php echo($image["sizes"]["onqor-large"]) ?>")' alt="<?php echo($image["alt"]) ?>" class="paragraph-image__image"></div>
        <div class="paragraph-image__text">
            <?php if($title): ?>
                <h1><?php echo($title) ?></h1>
            <?php endif; ?>
            <?php echo($text) ?>
        </div>
    </div>
    <?php echo($bottomText) ?>
</div>
<?php $title = get_sub_field('title');
      $image = get_sub_field('image');
      $logoImage = get_sub_field('logo_image');
?>

<div class="photo-title">
    <div class="photo-title__container">
        <div class="photo-title__container__image" style='background-image: url("<?php echo($image["sizes"]["onqor-hd"]) ?>")' alt="<?php echo($image["alt"]) ?>">
            <img src="<?php echo($logoImage["sizes"]["onqor-large"]) ?>" alt="<?php echo($logoImage["alt"]) ?>"/>
            <div class="text">
                <h1><?php echo($title) ?></h1>
            </div>
        </div>
    </div>
</div>
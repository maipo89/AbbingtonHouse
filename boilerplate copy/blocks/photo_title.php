<?php $title = get_sub_field('title');
      $image = get_sub_field('image');
      $logoImage = get_sub_field('logo_image');
?>

<div class="photo-title">
    <div class="photo-title__container">
        <div class="photo-title__container__image" style='background-image: url("<?php echo($image["sizes"]["onqor-hd"]) ?>")'>
            <img src="<?php echo($logoImage["sizes"]["onqor-large"]) ?>" />
            <div class="text">
                <h3><?php echo($title) ?></h3>
            </div>
        </div>
    </div>
</div>
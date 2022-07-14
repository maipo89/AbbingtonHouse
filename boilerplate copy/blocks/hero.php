<?php $description = get_sub_field('description');
      $image = get_sub_field('image');
      $logoImage = get_sub_field('logo_image');
      $logo = get_sub_field('logo');
?>

<div class="hero">
    <div class="hero__description">
         <img src="<?php echo($logo["sizes"]["onqor-large"]) ?>" />
         <p><?php echo($description) ?></p>
    </div>
    <div style='background-image: url("<?php echo($image["sizes"]["onqor-large"]) ?>")' class="hero__photo">
         <img src="<?php echo($logoImage["sizes"]["onqor-logo"]) ?>" />
    </div>
</div>
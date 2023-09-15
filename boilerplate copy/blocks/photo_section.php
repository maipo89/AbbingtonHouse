<?php $image = get_sub_field('image');
      $text = get_sub_field('text');
?>

<div class="photo-section" alt="<?php echo($image["alt"]) ?>" style='background-image: url("<?php echo($image["sizes"]["onqor-xl"]) ?>")'>
      <div class="photo-section__container">
            <div class="photo-section__text">
                  <?php echo($text) ?>
            </div>
      </div>
</div>
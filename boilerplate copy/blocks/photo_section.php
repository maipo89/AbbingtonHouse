<?php $image = get_sub_field('image');
      $text = get_sub_field('text');
?>

<div class="photo-section" style='background-image: url("<?php echo($image["sizes"]["onqor-hd"]) ?>")'>
      <div class="photo-section__text">
           <?php echo($text) ?>
      </div>
</div>
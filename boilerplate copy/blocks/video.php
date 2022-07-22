<?php $iframe = get_sub_field('video'); 
      $thumbnail = get_sub_field('thumbnail');
      $play = get_sub_field('play'); 
?>

<div class="video">
    <div class="iframe-container">
        <img class="play-image" alt="<?php echo($play["alt"]) ?>" src="<?php echo($play["sizes"]["onqor-xs"]) ?>" />
        <div class="thumbnail" style='background-image: url("<?php echo($thumbnail["sizes"]["onqor-large"]) ?>")'></div>
        <iframe id="iframe" src="<?php echo($iframe['url']) ?>"></iframe>
    </div>
</div>
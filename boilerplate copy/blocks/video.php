<?php $iframe = get_sub_field('video'); 
      $thumbnail = get_sub_field('thumbnail'); ?>

<div class="video">
    <div class="iframe-container">
        <div class="thumbnail" style='background-image: url("<?php echo($thumbnail["sizes"]["onqor-large"]) ?>")'></div>
        <iframe id="iframe" src="<?php echo($iframe['url']) ?>"></iframe>
    </div>
</div>
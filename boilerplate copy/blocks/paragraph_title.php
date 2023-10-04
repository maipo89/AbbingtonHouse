<?php $title = get_sub_field('title');
      $text = get_sub_field('text');
?>

<div class="paragraph-title">
    <?php if($title): ?>
        <h1><?php echo($title) ?></h1>
    <?php endif; ?>
    <?php echo($text) ?>
</div>
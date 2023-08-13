<?php $title = get_sub_field('title');
      $image = get_sub_field('image');
      $logoImage = get_sub_field('logo_image');
      $centerImage = get_sub_field('center_image');
      $backToBlogs = get_sub_field('back_to_blogs')
?>

<?php $centerClass = '';

    if ($centerImage) {
        $centerClass = 'center';
    }

?>

<div class="photo-title">
    <div class="photo-title__container <?php echo($centerClass) ?>">


        <div class="photo-title__container__image" style='background-image: url("<?php echo($image["sizes"]["onqor-hd"]) ?>")' alt="<?php echo($image["alt"]) ?>">
            <img src="<?php echo($logoImage["sizes"]["onqor-large"]) ?>" alt="<?php echo($logoImage["alt"]) ?>"/>
            <div class="text">
                <h1><?php echo($title) ?></h1>
            </div>
            <?php if ($backToBlogs): ?>
                <div class="back-button">
                    <a href="<?php echo get_home_url(); ?>/blogs ?>">Back to all blogs</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
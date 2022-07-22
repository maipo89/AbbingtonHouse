<?php $title = get_sub_field('title');
      $text = get_sub_field('text');
      $dropdown = get_sub_field('dropdown');
      $input = get_sub_field('input');
      $textArea = get_sub_field('text_area');
      $buttonText = get_sub_field('button_text');
      $textCall = get_sub_field('text_call');
      $number = get_sub_field('number');
      $backgroundPattern = get_sub_field('background_pattern');
      $completeText = get_sub_field('complete_text');
      $completeSubtext = get_sub_field('complete_subtext');
?>

<div class="form-admission">
    <img alt="<?php echo($backgroundPattern['alt']) ?>" src="<?php echo($backgroundPattern['sizes']['onqor-large']) ?>" />
    <div class="form-admission__form">
        <h3><?php echo($title) ?></h3>
        <p><?php echo($text) ?></p>
        <form id="formAdmission" name="formAdmission" action="<?php echo home_url(); ?>/mail.php" method="POST">
            <div class="form-admission__form__container">
                <div class="form-admission__form__container__left-container">
                    <div class="select-wrapper">
                        <div class="select">
                            <?php if( $dropdown ): ?>
                                <input class="referral-input" type="text" name="referral" value=""/>
                                <div class="select__trigger"><span><?php echo($dropdown['dropdown_placeholder']) ?></span>
                                    <div class="arrow"></div>
                                </div>
                                <?php $dropdownOptions = $dropdown['dropdown_options']; ?>
                                <div class="custom-options">
                                    <?php foreach ($dropdownOptions as $option) { ?>
                                        <span class="custom-option" data-value="<?php echo($option['option']) ?>"><?php echo($option['option']) ?></span>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="email-container">
                        <input class="input-email" name="email" type="email" placeholder="<?php echo($input[0]['input_placeholder']) ?>" />
                        <span class="email-error">This is not a valid email</span>
                    </div>
                    <input class="input-contact required" name="contact" type="text" placeholder="<?php echo($input[1]['input_placeholder']) ?>" />
                </div>
                <div class="form-admission__form__container__right-container">
                    <input class="input-name required" name="thename" type="text" placeholder="<?php echo($input[2]['input_placeholder']) ?>" />
                    <textarea class="input-message required" name="message" type="text" placeholder="<?php echo($textArea) ?>"></textarea>
                </div>
            </div>
            <div class="form-admission__form__button-container">
                <input type="submit" class="button" value="<?php echo($buttonText)?>" />
            </div>
            <p class="call-text"><?php echo($textCall)?> <a href="tel:<?php echo($number)?>"><?php echo($number)?></a><p>
        </form>
        <div>
        </div>
    </div>
    <div class="form-admission__form-complete">
        <h3><?php echo($completeText)?></h3>
        <p><?php echo($completeSubtext)?> <a href="tel:<?php echo($number)?>"><?php echo($number)?></a></p>
    </div>
</div>
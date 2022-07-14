<?php $photo = get_sub_field('photo');
      $formTitle = get_sub_field('form_title');
      $formInputs = get_sub_field('form_inputs');
      $dropdown = get_sub_field('dropdown');
      $buttonText = get_sub_field('button_text');
      $textCall = get_sub_field('call_text');
      $number = get_sub_field('number');
      $input = get_sub_field('form_inputs');
?>

<div class="photo-form">
    <div class="photo-form__image" style='background-image: url("<?php echo($photo['sizes']['onqor-hd']) ?>")'>
    </div>
    <div class="photo-form__form">
        <h4><?php echo($formTitle) ?></h4>
        <form>
            <input class="input-name required" name="name" type="text" placeholder="<?php echo($input[0]['input_placeholder']) ?>" />
            <input class="input-contact required" name="contact" type="text" placeholder="<?php echo($input[1]['input_placeholder']) ?>" />
            <div class="email-container">
                <input class="input-email" name="email" type="text" placeholder="<?php echo($input[2]['input_placeholder']) ?>" />
                <span class="email-error">This is not a valid email</span>
            </div>
            <div class="select-wrapper">
                <div class="select">
                    <input class="enquire-input" type="text" name="enquire" value=""/>
                    <?php if( $dropdown ): ?>
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
            <div class="photo-form__form__button-container">
                <span>Success</span>
                <button type="submit" class="button"><?php echo($buttonText)?></button>
            </div>
        </form>
        <p class="call-text"><?php echo($textCall)?> <a href="tel:<?php echo($number)?>"><?php echo($number)?></a><p>
    </div>
</div>
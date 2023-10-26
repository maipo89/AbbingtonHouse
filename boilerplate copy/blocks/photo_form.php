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
    <div class="photo-form__image" style='background-image: url("<?php echo($photo['sizes']['onqor-large']) ?>")' alt="<?php echo($photo['alt']) ?>">
    </div>
    <div class="photo-form__form">
        <h2><?php echo($formTitle) ?></h2>

        <!-- <script id='formScript592080000000423007' src='https://crm.zoho.eu/crm/WebFormServeServlet?rid=7457700bb80fd4a717c79294e0b3d565116ff360f1720fc66d096e71312ce04bgid43c814f375139ebc4a3e1bf337eb5a1ecb6317eb8bb744f1b84fafbd669e4dba&script=$sYG'></script> -->

        <!-- <form id="formEnquire" name="formEnquire" action="<?php echo home_url(); ?>/mail_enquire.php" method="POST">
            <input class="input-name required" name="thename" type="text" placeholder="<?php echo($input[0]['input_placeholder']) ?>" />
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
                <span>Thank you for your message</span>
                <input type="submit" class="button" value="<?php echo($buttonText)?>" />
            </div>
        </form> -->

        <script id='formScript592080000000570115' src='https://crm.zoho.eu/crm/WebFormServeServlet?rid=0431862bfa426c601f1b54d0f8ff2dbc9a0ad5f7fe013cd7c012e880703ef8253aaf95d2972ddfbfa448a438062d5399gid1c554e38a384bac9a0a8d65abfeba6a4312b1dce8dc3ab671ea426f5432d0b45&script=$sYG'></script>
            
        <p class="call-text"><?php echo($textCall)?> <a href="tel:<?php echo($number)?>"><?php echo($number)?></a><p>
    </div>
</div>
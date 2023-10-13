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
      $testimonialsPage = get_sub_field('testimonials_page')
?>

<div class="form-admission">
    <img alt="<?php echo($backgroundPattern['alt']) ?>" src="<?php echo($backgroundPattern['sizes']['onqor-large']) ?>" />
    <div class="container">
        <div class="form-admission__form">
            <h2><?php echo($title) ?></h2>
            <p><?php echo($text) ?></p>

            <?php if( $testimonialsPage ): ?>
              
                <script id='formScript592080000000590001' src='https://crm.zoho.eu/crm/WebFormServeServlet?rid=7457700bb80fd4a717c79294e0b3d5658da6bf3b371d184c147faf334af6c8a7gid43c814f375139ebc4a3e1bf337eb5a1ecb6317eb8bb744f1b84fafbd669e4dba&script=$sYG'></script>
            
            <?php else: ?>

                <script id='formScript592080000000423007' src='https://crm.zoho.eu/crm/WebFormServeServlet?rid=7457700bb80fd4a717c79294e0b3d565116ff360f1720fc66d096e71312ce04bgid43c814f375139ebc4a3e1bf337eb5a1ecb6317eb8bb744f1b84fafbd669e4dba&script=$sYG'></script>

            <?php endif; ?>
            
            <!-- <form id="formAdmission" name="formAdmission" action="<?php echo home_url(); ?>/mail.php" method="POST">
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
                        <input class="input-last-name required" name="thename" type="text" placeholder="<?php echo($input[3]['input_placeholder']) ?>" />
                        <textarea class="input-message required" name="message" type="text" placeholder="<?php echo($textArea) ?>"></textarea>
                    </div>
                </div>
                <div class="form-admission__form__button-container">
                    <input type="submit" class="button" value="<?php echo($buttonText)?>" />
                </div>
            </form> -->
            <p class="call-text"><?php echo($textCall)?> <a href="tel:<?php echo($number)?>"><?php echo($number)?></a><p>
        </div>
    </div>
    <!-- <div class="form-admission__form-complete">
        <h3><?php echo($completeText)?></h3>
        <p><?php echo($completeSubtext)?> <a href="tel:<?php echo($number)?>"><?php echo($number)?></a></p>
    </div> -->
</div>
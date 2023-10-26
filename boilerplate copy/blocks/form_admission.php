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
              
                <script id='formScript592080000000590001' src='https://crm.zoho.eu/crm/WebFormServeServlet?rid=d39a9ee7db2512c23c78f3b1eebd61f49c668e79febb06fdfbd81f434a0506e6e9140ce03dd5d1b3a93596b44f39462bgid65e790f527d11616ab831be74c9e367243919bb4640c519087eb523a3a7ab432&script=$sYG'></script>
                    
            <?php else: ?>

                <script id='formScript592080000000423007' src='https://crm.zoho.eu/crm/WebFormServeServlet?rid=51838736ee45f2e5d4ef82f05aef1a32f4defa66d6e7b238749b0998c743f17481d9b57e5e7b6132da78adf8256c2972gid618ce03a0cae8a7dee84096452b89ed686344b8d879ccb4055de2444ba89cc46&script=$sYG'></script>

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
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
              
                <script id='formScript592080000000590001' src='https://crm.zoho.eu/crm/WebFormServeServlet?rid=86d8a8514138676ada88e58cd9e99503dfd640e03a3b605cb9639c13abcca2adec46891b3b93037bbf3673839e2f17b3gid61d5e2cc17c5c51cbf85d588d0bb2ba77d52aca0c46709c379eba56a76bbb1b2&script=$sYG'></script>
                    
            <?php else: ?>

                <script id='formScript592080000000423007' src='https://crm.zoho.eu/crm/WebFormServeServlet?rid=1824210598d225b94ee6e9c72cd9e780e537996d0e12794d970d774570551f0fe96fe8e86a869e3d4732b08d25a509e4gid6704fee9dfd2a25f7dff72c89a5cbb5b79fd9b54fdc2b16316155922e574ae2c&script=$sYG'></script>

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
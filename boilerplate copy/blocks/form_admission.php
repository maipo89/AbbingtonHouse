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
              
                <script id='formScript592080000000590001' src='https://crm.zoho.eu/crm/WebFormServeServlet?rid=a1c2f8ddf87a1ab71dded2154f5582d4ff94a21db81b5cfe9a73d266e467aa60a2ff4c53abddb93eea3a8986c2db10e1gid4af7dee104c0651f47c5d3d3d2ddfacd62ed43ec2de682a38e3660e750d6bc69&script=$sYG'></script>

            <?php else: ?>

                <script id='formScript592080000000423007' src='https://crm.zoho.eu/crm/WebFormServeServlet?rid=263b83158ea334d2b6f185fb80772474c46240fb9f8e898072a0b5046957b3f7a38ccdd4ec4a540369a533c58c77b25bgid8ff9687afe185e8e70c4c6c7e15ca5e232d28a27e5c8189b16128adc8c20ea77&script=$sYG'></script>

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
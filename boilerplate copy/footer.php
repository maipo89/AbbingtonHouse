<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
                <div class="footer__container">
					<svg width="57" height="85" viewBox="0 0 57 85" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M25.7991 62.9125C20.7098 62.9125 16.2216 61.6759 12.3425 59.2026C8.46344 56.7293 5.43391 53.2733 3.26195 48.8264C1.08197 44.3876 0 39.2773 0 33.5036C0 28.8109 0.777418 24.4295 2.32424 20.3675C3.87908 16.3054 6.05104 12.7511 8.84814 9.70458C11.6452 6.65804 14.8992 4.28306 18.626 2.56324C22.3528 0.851609 26.3601 -0.00830078 30.6399 -0.00830078C35.8574 -0.00830078 40.4338 1.22833 44.377 3.70159C48.3202 6.17486 51.4058 9.61449 53.6419 14.0287C55.878 18.4429 56.992 23.5286 56.992 29.3023C56.992 34.0605 56.1985 38.4747 54.6197 42.5285C53.0328 46.5906 50.8287 50.1449 48.0076 53.1914C45.1864 56.238 41.8764 58.613 38.0855 60.3328C34.2946 62.0444 30.1991 62.9043 25.7911 62.9043L25.7991 62.9125ZM28.6843 58.0561C32.6596 58.0561 36.1379 57.0078 39.1194 54.9113C42.1008 52.8147 44.4411 49.9156 46.1482 46.2057C47.8553 42.4958 48.7129 38.1962 48.7129 33.307C48.7129 27.8528 47.8152 23.0618 46.012 18.9343C44.2087 14.8067 41.7321 11.5718 38.5583 9.22958C35.3926 6.87916 31.6978 5.70805 27.4741 5.70805C23.6271 5.70805 20.2369 6.75632 17.3196 8.85286C14.4023 10.9494 12.1181 13.8485 10.4751 17.5584C8.83211 21.2683 8.00661 25.5679 8.00661 30.4571C8.00661 35.854 8.87219 40.6286 10.6114 44.7807C12.3505 48.941 14.787 52.1923 17.9207 54.5345C21.0544 56.8849 24.6369 58.0561 28.6763 58.0561H28.6843Z" fill="white"/>
						<path d="M33.4212 79.857C33.7017 80.8397 33.6296 81.8716 32.9323 82.9199C32.1869 84.0419 30.9046 84.7298 29.5822 84.9264C27.5865 85.2212 25.5268 84.6479 24.1322 83.141C21.0787 79.8488 25.3184 76.4255 27.6346 74.2225C27.9472 73.9277 28.3239 73.6165 28.7487 73.6575C29.1814 73.6984 29.486 74.0915 29.7345 74.4437C30.8485 76.0079 32.8602 77.8505 33.4212 79.857Z" fill="#CDAC8E"/>
					</svg>

					<div class="options address">
						<h3>Address</h3>
						<div class="line"></div>
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Menu Left', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf address-menu',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</div>

					<div class="options contact">
						<h3>Contact</h3>
						<div class="line"></div>
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Menu Center', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf contact-menu',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</div>

					<div class="options socials">
						<h3>Socials</h3>
						<div class="line"></div>
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Menu Right', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf socials-menu',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</div>
				</div>

				<div class="footer__links">
                    <a href="<?php echo get_home_url(); ?>/terms-conditions">terms & conditions</a>
					<a href="<?php echo get_home_url(); ?>/privacy">privacy policy</a>
					<a href="<?php echo get_home_url(); ?>/cookie-policy">cookie policy</a>
					<a href="javascript:void(0);">site map</a>
					<a href="https://onqor.co.uk/">website by onqor</a>
				</div>

				<div id="inner-footer" class="wrap cf inner-footer">
                    <p>Designed and built by <a href="https://onqor.com/">ONQOR</a></p>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
    
	</body>

</html> <!-- end of site. what a ride! -->

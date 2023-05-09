<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phamtung
 */

?>
		<div class="footer">
            <div class="footer__wrap">
                <div class="footer__body">
                    <div class="footer__logo-wrap">
                        <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>" alt="">
                    </div>
                    <div class="footer__brand-name">
                        <?php  bloginfo( 'name' ); ?>
                    </div>
                    <p class="footer__copyright">
                        Copyright 2012 - 2020. All rights reserved.
                    </p>
                    <?php 
                        wp_nav_menu(array('theme_location'=>'footer-menu',
                                            'menu_class'=>'menu-footer '))
                    ?>
                </div>
            </div>
        </div>
        <!-- Swiper JS -->
        <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
        <!-- Swiper JS -->
				<?php wp_footer(); ?>
        <!-- External JS -->
        <!-- <script src="./assets/js/main.js"></script> -->
        <!-- External JS -->
    </body>
</html>
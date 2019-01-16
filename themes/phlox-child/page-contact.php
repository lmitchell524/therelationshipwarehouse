<?php
/**
 * Template Name: The Pearl Experience
 *
 * @package    Auxin
 * @author     averta (c) 2014-2018
 * @link       http://averta.net
 */
get_header(); ?>

    <main id="main" >
        <div class="aux-wrapper">
            <div class="aux-container">
                <div id="primary" class="aux-primary" >
                    <div class="content" role="main"  >
                        <section class='main-content'>
                            <div class='contact-container'>
                                <div class='address-container'>
                                    <div class='address'>
                                        <h4 class='address-city'>Riverside</h4>
                                        <p>7119 Indiana Avenue</p>
                                        <p>Riverside, CA 92504</p>
                                    </div>
                                    <div class='address'>
                                        <h4 class='address-city'>Costa Mesa</h4>
                                        <p>151 Kalmus Drive Suite M-2</p>
                                        <p>Costa Mesa, CA 92626</p>
                                    </div>
                                </div>
                                <div class='phone'>Phone:<a href="tel:+1-949-482-2233"> 949-482-2233</a></div>
                                <div class='email'>Email: <a href="mailto:info@therelationshipwarehouse.com"> info@therelationshipwarehouse.com</a></div>
                            </div>
                            <form class='services-donate-button donate-contact' action="https://www.paypal.com/cgi-bin/webscr" method="post" target="paypal"><input type="hidden" name="cmd" value="_donations"><input type="hidden" name="currency_code" value="USD"><input type="hidden" name="business" value="guy@therelationshipwarehouse.com"><input type="hidden" name="item_name" value="The relationship Warehouse Year End Giving"><input type="hidden" name="item_number"><input class='donate' type="submit" value='Donate' border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><input type="hidden" name="bn" value="godaddy_hosting_WPS_US"><img alt="" style="border-width: 0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></form>
                            <p class='form-instructions'>Please fill out this form to schedule an appointment, sign up for a workshop, volunteer, or ask a question. We look forward to hearing from you!</p>
                            <p><?php echo do_shortcode('[contact-form-7 id="572" title="Contact form 1"]'); ?></p>
                        </section>
                    </div><!-- end content -->
                </div><!-- end primary -->
            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->

<?php get_footer(); ?>

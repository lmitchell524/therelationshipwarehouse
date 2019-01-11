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
                        <div class="home-hero-container">
                            <div class="pearl-hero-img"></div>
                            <img class="pearl-logo" src="http://localhost:8888/wordpress/wp-content/uploads/2018/12/logo_transparent_background.png" alt="" class="alignnone size-medium wp-image-544" />
                        </div>
                        <section class='main-content'>
                            <h1 class='pearl-tagline'>helping girls and women find their way HOME to love, identity, and value.</h1>
                            <div class='pearl-question-container clearfix'>
                                <p class='pearl-questions'>want to fill your heart and mind with truth about who you REALLY are?</p>
                                <p class='pearl-questions align-right pearl-margin-right-sm'>want to let go of the anger and the bitterness?</p>
                                <p class='pearl-questions pearl-margin-left-md'>want to find an anchor for your emotions?</p>
                                <p class='pearl-questions align-right'>want to stop comparing yourself to others and just be YOU?</p>
                                <p class='pearl-questions pearl-margin-left-sm'>want to look in the mirror without having a meltdown?</p>
                                <p class='pearl-questions align-right pearl-margin-right-md'>want to find true love that lasts forever?</p>
                                <p class='pearl-questions'>want to forgive and be free of the drama? </p>
                            </div>
                            <div class='pearl-side-by-side-img-left'>
                                <?php $imageArray = wp_upload_dir();?>
                                <div class='pearl-img-container'>
                                    <img src="<?php echo $imageArray["url"];?>/pearlImageLeft.jpg" alt="services offered" class="alignnone size-medium wp-image-459" />
                                </div>
                                <div class='pearl-side-by-side-text-container'>
                                    <div class='pearl-side-by-side-text'>
                                        The Pearl Experience will lead you to the core truths and principles needed to start living your significance and value.
                                    </div>
                                </div>
                            </div>
                            <div class='pearl-testimonial-container'>
                                <p class="dashicons dashicons-format-quote home-quote-icon"></p>
                                <p class='home-testimonial'>i received healing in my life for a deep shame i never thought could or deserved to be healed.</p>
                                <p class='home-testimonial'>i loved connecting with other women, being together and relating to one another in beautiful but relaxed environment. </p>
                                <p class='home-testimonial'>i can now rest in the truth of who God says i am and not have to depend on myself or other's approval or opinion.</p>
                                <p class="dashicons dashicons-format-quote home-quote-icon quote-rotate"></p>
                            </div>
                            <div class='pearl-side-by-side-img-right'>
                                <div class='pearl-side-by-side-text-container'>
                                    <div class='pearl-side-by-side-text'>
                                        If you are interested in attending or hosting a Pearl Workshop, email:<a class='rox-email' href='mailto:roxanna@therelationshipwarehouse.com'>roxanna@therelationshipwarehouse.com</a>
                                        <div class='pearl-button-container'>
                                            <div class='pearl-button'><a href="<?php echo get_page_link( get_page_by_title( shop )->ID ); ?>">Resources</a></div>
                                        </div>
                                    </div>
                                </div>
                                <?php $imageArray = wp_upload_dir();?>
                                <div class='pearl-img-container'>
                                    <img src="<?php echo $imageArray["url"];?>/pearlImageRight.jpg" alt="services offered" class="alignnone size-medium wp-image-459" />
                                </div>
                            </div>
                        </section>
                    </div><!-- end content -->
                </div><!-- end primary -->
            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->

<?php get_footer(); ?>

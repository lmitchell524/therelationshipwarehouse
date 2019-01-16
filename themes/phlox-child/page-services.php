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
                        <div class="services-hero-container">
                            <div class="services-hero-img"></div>
                        </div>
                        <section class='main-content'>
                            <div class="services-offered-container">
                                <div class="services-offered">
                                    <h3 class="services-offered-header">Individual Counseling</h3>
                                    <div>We provide individual counseling to adults, adolescents & children. We believe in a comprehensive approach to healing individuals and relationships one person at a time. No matter what kind of pain, trauma or difficulty you have endured or are currently experiencing, we are here to help.  </div>
                                    <div class='session-length'>50 minute session</div>
                                </div>
                                <div class="services-offered">
                                    <h3 class="services-offered-header">Couples Counseling</h3>
                                    <div>Whether you are dating, engaged or married - we provide a safe place for you and your partner to experience healing, growth, and hope. The Relationship Warehouse seeks to provide help to any of the relationship issues that come your way. </div>
                                    <div class='session-length'>50 minute session</div>
                                </div>
                                <div class="services-offered">
                                    <h3 class="services-offered-header">Pre-marital Counseling</h3>
                                    <div>The primary goal of premarital counseling through The Relationship Warehouse is to establish a foundation for lasting and healthy relationships, and to provide you with the necessary tools not just to survive, but to thrive in your marriage. </div>
                                    <div class='session-length'>50 minute session</div>
                                </div>
                            </div>
                            <div class="services-offered-container">
                                <div class="services-offered">
                                    <h3 class="services-offered-header"> Retreats</h3>
                                    <div>The Relationship Warehouse would love to be a part of your next church retreat or event - please contact us for more information on our marriage retreats and speaking abilities.</div>
                                    <div class='session-length'>
                                        <a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' )); ?>">Contact Us</a>
                                    </div>
                                </div>
                                <div class="services-offered">
                                    <h3 class="services-offered-header">Workshops</h3>
                                    <div>The Relationship Warehouse provides a variety of uniquely tailored workshops to strengthen and equip individuals, relationships, and families by providing practical tools and education on a variety of topics. Here is a list of our current workshop offerings.</div>
                                    <div class='session-length'>
                                        <a href='#workshops'>Available Workshops</a>
                                    </div>
                                </div>
                                <div class="services-offered">
                                    <h3 class="services-offered-header">Grief & Trauma Treatment</h3>
                                    <div>The Relationship Warehouse offers EMDR treatment where indicated, a pyschotherapy treatment that enables you to heal from the symptoms and emotional stress that are a result of disturbing life experiences.</div>
                                    <div class='session-length'>50 minute session</div>
                                </div>
                            </div>
                            <form class='services-donate-button' action="https://www.paypal.com/cgi-bin/webscr" method="post" target="paypal"><input type="hidden" name="cmd" value="_donations"><input type="hidden" name="currency_code" value="USD"><input type="hidden" name="business" value="guy@therelationshipwarehouse.com"><input type="hidden" name="item_name" value="The relationship Warehouse Year End Giving"><input type="hidden" name="item_number"><input class='donate' type="submit" value='Donate' border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><input type="hidden" name="bn" value="godaddy_hosting_WPS_US"><img alt="" style="border-width: 0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></form>
                            <h1 class='services-offered-header'> At The Relationship Warehouse, we want to come alongside you as you experience healing, hope and freedom.</h1>
                            <div class="service-details-container-1">
                                <div class='services-details-image-container'>
                                    <?php $imageArray = wp_upload_dir();?>
                                    <img src="<?php echo $imageArray["url"];?>/servicesImageLeft.jpeg" alt="services offered" width="300" height="300" class="alignnone size-medium wp-image-459" />
                                </div>
                                <div class="services-details">
                                    <h3> Common areas of focus include:</h3>
                                    <ul class='services-list'>
                                        <li>Divorce or Separation</li>
                                        <li>Infidelity and Mistrust</li>
                                        <li>Depression and Anxiety</li>
                                        <li>Trauma and Abuse</li>
                                        <li>Family Conflict</li>
                                        <li>Suicidal Thoughts</li>
                                        <li>Self-harm</li>
                                        <li>Eating Disorders</li>
                                        <li>Identity Issues</li>
                                        <li>Loneliness</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-details-container-2">
                                <div class="services-details">
                                    <ul class='services-list'>
                                        <li>Inability to Forgive Self or Others</li>
                                        <li>Doubting Faith</li>
                                        <li>Addiction and Recovery</li>
                                        <li>Abortion</li>
                                        <li>Anger and Bitterness</li>
                                        <li>Broken Relationships</li>
                                        <li>Chronic Illness and Pain</li>
                                        <li>People Pleasing</li>
                                        <li>Codependency</li>
                                        <li>Grief and Loss</li>
                                        <li>Parenting</li>
                                    </ul>
                                </div>
                                <div class='services-details-image-container-2'>
                                    <img src="<?php echo $imageArray["url"];?>/servicesImageRight.jpeg" alt="services offered" width="300" height="300" class="alignnone size-medium wp-image-459" />
                                </div>
                            </div>
                            <div class='about-us-divider'></div>
                            <h1 id='workshops' class='workshop-header'>Workshops</h1>
                            <div class='workshop-container'>
                                <div class='work-shops'>
                                    <h4 class='workshop-name'>The Codependence Workshop</h4>
                                    <p>The Codependence Workshop is a hybrid 16- week workshop, designed to help people find their worth, dependence and significance in Jesus Christ instead of the ability to please others, strive to perform, or control the behaviorally/addicted person.</p>
                                    <p>The following materials are used:</p>
                                    <ul class='workshop-resource-list'>
                                        <li>The Christian Codependence Workbook from Surviving to Significance by Stephanie Tucker</li>
                                        <li>The Search for Significance by Robert S. McGee</li>
                                        <li>Stickman Theology by Terry Ewing</li>
                                        <li>Additional materials Roxanna has created for the use of healing in codependence.</li>
                                    </ul>
                                    <p class='workshop-cost'>Cost: $100</p>
                                    <p>Requirements: Willing heart and completing weekly homework reading and writing assignments</p>
                                    <p>Dates: November – March</p>
                                    <div class='workshop-btn-container'>
                                        <a class='workshop-btn' href="<?php echo get_permalink( get_page_by_title( 'Contact Us' )); ?>">Sign Up</a>
                                    </div>
                                </div>
                                <div class='workshop-img'>
                                    <img src="<?php echo $imageArray["url"];?>/workshops.jpeg" alt="services offered" width="300" height="300" class="alignnone size-medium wp-image-459" />
                                </div>
                            </div>
                        </section>
                    </div><!-- end content -->
                </div><!-- end primary -->
            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

            <footer class="display_block">
                <div class="top_footer display_block wow fadeIn">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 links">
                                <div class="row">
                                    <div class="links_row col-sm-4">
                                        <h5>ABOUT US</h5>
                                        <ul class="footer_links">
                                            <?php wp_nav_menu( array( 'theme_location' => 'footer_about_us', 'container' => '', 'menu_class' => 'navigation' ) ); ?>
                                        </ul>
                                        <ul class="social_links">
										<li>
										<?php
		                                $face=get_option_tree('facebook');
		                                if($face==""){}else{ ?>
										<a target="_blank" href="<?php echo $face; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?></li>

                                            <li>
											<?php
											$twi=get_option_tree('twitter');
											if($twi==""){}else { ?>
											<a target="_blank" href="<?php echo $twi; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php }?></li>
											
                                            <li>
											<?php
											$insta=get_option_tree('instagram');
											if($insta==""){}else { ?>
											<a target="_blank" href="<?php echo $insta; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php } ?></li>
                                        </ul>
                                    </div>
                                    <div class="links_row col-sm-4">
                                        <h5>QUICK LINKS</h5>
                                        <ul class="footer_links">
                                            <?php wp_nav_menu( array( 'theme_location' => 'quick_links', 'container' => '', 'menu_class' => '' ) ); ?>
                                        </ul>
                                    </div>
                                    <div class="links_row col-sm-4">
                                        <h5>&nbsp;</h5>
                                        <ul class="footer_links">
                                            <li><a href="">Home Improvements</a></li>
                                            <li><a href="">De-Cluttering</a></li>
                                            <li><a href="">Storage Tips</a></li>
                                            <li><a href="">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 news_letter">
                                <div class="news-letter">
                                    <h5>NEWSLETTER</h5>
                                    <small>If you want revice our all weekly update signup below</small>
                                    <div class="newsletter_form display_block">
                                        <form>
                                            <?php echo do_shortcode('[mc4wp_form id="81"]'); ?>
                                        </form>
                                    </div>
                                </div>
                                <div class="get_in">
                                    <div class="top_get">
                                        <h5>GET IN TOUCH</h5>
                                        <a href="mailto:<?php echo get_option_tree('email'); ?>" target="_top"><?php echo get_option_tree('email'); ?></a>
                                    </div>
                                    <div class="btm_get">
                                        <h5>Call Us</h5>
                                        <p>Need help? Gives us a call</p>
                                        <div class="tel_footer display_block">
                                            <a href="tel:<?php echo get_option_tree('enter_first_number'); ?>"><?php echo get_option_tree('enter_first_number'); ?></a> &#44; <a href="tel:<?php echo get_option_tree('enter_second_number'); ?>"><?php echo get_option_tree('enter_second_number'); ?></a></div>
                                    </div>
                                    <div class="Find_us display_block">
                                        <h5><a href="">Find Us</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="privacy_cont display_block">
                    <div class="container">
                        <div class="ftr_nav">
                            <ul>
                               <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '', 'menu_class' => '' ) ); ?>
                            </ul>
                        </div>
                        <div class="imk_cont">
                            <span>
                    <?php echo get_option_tree('powered_by'); ?> <a target="_blank" href="http://imarkinfotech.com"><img alt="imark-logo" src="<?php echo get_option_tree('powered_by_logo'); ?>"></a>
                            </span>
                        </div>
                        <div class="pull-right">
                            <p><?php echo get_option_tree('copy_right'); ?></p>
                        </div>
                    </div>
                </div>
				
            </footer>
<?php wp_footer(); ?>
        </div>
		
    </div>


<div class="script">


        <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <!-- wow-->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
        <script type="text/javascript">
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 140,
                mobile: true,
                live: true,
                callback: function (box) {},
                scrollContainer: null
            });
            wow.init();
        </script>

        <!-- header-fixed--->
        <script>
            jQuery(window).scroll(function () {

                if (jQuery(this).scrollTop() > 100) {
                    jQuery('header').addClass('off-canvas');
                } else {
                    jQuery('header').removeClass('off-canvas');
                }
            });
        </script>




        <script>
            jQuery(window).load(function () {
               jQuery(".se-pre-con").fadeOut("slow");;
            });
        </script>

    </div>
</body>

</html>

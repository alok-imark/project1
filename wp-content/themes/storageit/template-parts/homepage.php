<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

         <div class="paddig-top">
            <div class="banner display_block  wow fadeIn">
                <div class="text-center">
                    <img src="<?php echo get_option_tree('banner_image'); ?>"></div>
                <div class="container">
                    <div class="inner_banner">
                        <h2><?php echo get_option_tree('banner_heading_text'); ?></h2>

                        <div class="banner_button text-center display_block">
                            <a href="<?php echo get_option_tree('first_link'); ?>" class="custom"><?php echo get_option_tree('first_link_name_of_banner'); ?></a>
                            <a href="<?php echo get_option_tree('second_link'); ?>" class="custom"><?php echo get_option_tree('second_link_name_of_banner'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services_cont display_block">
                <div class="container">

                    <?php the_field('name_of_service',5); ?>
                    <div class="row">
                        <ul>
						<?php	$args = array('post_type' => 'service','posts_per_page'=>'3','order'=>'DESC');
                             $loop = new WP_Query( $args );
                             while ( $loop->have_posts() ) : $loop->the_post();
                             ?>
                            <li class="col-sm-4 wow fadeInUp">
							
                                <div class="img_service">
                                    <a href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) {
                                     the_post_thumbnail('service');
                                     } else { ?>
                                     <img src="http://placehold.it/459x284&amp;text=No image found" alt="<?php the_title(); ?>"/>
                                      <?php } ?></a>
                                </div>
                                <div class="info_service display_block">
                                    <h3><a href=""><?php the_title();?></a></h3>
                                    <?php the_content(); ?>
                                    <a href="<?php the_permalink(); ?>" class="bg_green">Read More</a>
                                </div>
								
								<?php endwhile;?>
                            </li>
							
                        </ul>
                    </div>
                </div>
            </div>

            <div class="welcome_cont display_block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 welcome_info">
                         <?php while ( have_posts() ) : the_post(); ?>
                         <?php the_content();?>
                         <?php endwhile;?>   
                        </div>
                        <div class="col-sm-7 help_cont pull-right">
                            <h4>How We Can Help</h4>
                            <div class="tabs display_block">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#mnu1">MOVING HOUSE</a></li>
                                    <li><a data-toggle="tab" href="#mnu2">ONLINE RETAILERS</a></li>
                                    <li><a data-toggle="tab" href="#mnu3">STUDENTS</a></li>
                                    <li><a data-toggle="tab" href="#mnu4">PERSONAL STORAGE </a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="mnu1" class="tab-pane fade in active">
                                        <div class="inner_help display_block">
                                            <div class="help_img wow flipInX">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/move_hoouse.png" alt="img">
                                            </div>
                                            <div class="content_help">
                                                <p>In an ideal world, everyone would move straight from one house to the next - but things often don't work out like that. Don't worry though, because with our affordable self storage solutions, we'll be here keeping things safe, secure and dry until you get the keys to your new place.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="mnu2" class="tab-pane fade">
                                        <div class="inner_help display_block">
                                            <div class="help_img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/move_hoouse.png" alt="img">
                                            </div>
                                            <div class="content_help">
                                                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="mnu3" class="tab-pane fade">
                                        <div class="inner_help display_block">
                                            <div class="help_img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/move_hoouse.png" alt="img">
                                            </div>
                                            <div class="content_help">
                                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="mnu4" class="tab-pane fade">
                                        <div class="inner_help display_block">
                                            <div class="help_img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/move_hoouse.png" alt="img">
                                            </div>
                                            <div class="content_help">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>
            <div class="history_cont display_block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 history_image wow fadeInLeft">
						  <?php
                           $history=get_post_meta(5,"our_history_image",true);
                           $thumb = wp_get_attachment_image_src($history, 'our_history_image' );	
                            ?>
                            <img src="<?php echo $url = $thumb['0'];?>" alt="jpg">
                        </div>
                        <div class="col-sm-6 history_info pull-right">
                            <?php the_field('our_history',5); ?>
                        </div>

                    </div>
                </div>

            </div>

<?php
get_footer();

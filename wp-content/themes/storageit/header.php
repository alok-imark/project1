<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fab-icon.ico" sizes="16x16">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800,800italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,900italic,900,800italic,800,700,700italic' rel='stylesheet' type='text/css'>
	
	
	</head>

<body>

    <div class="main display_block">
	<?php if ( is_user_logged_in() ) { ?>

    <?php } // end if ?>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_option_tree('logo'); ?>" alt="logo"></a>
                    </div>
                    <div class="col-sm-7 col right_header pull-right">
                        <div class="email_cont display_block">
                            <div class="pull-left mail">
                                <a href="mailto:<?php echo get_option_tree('email'); ?>" target="_top"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_option_tree('email'); ?></a>
                            </div>
                            <div class="pull-right tel_info">
                                <div class="pull-left">
                                    <span class="bold"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_option_tree('name_of_first_number'); ?> </span>
                                    <span><a href="tel:<?php echo get_option_tree('enter_first_number'); ?>"><?php echo get_option_tree('enter_first_number'); ?></a></span>
                                </div>
                                <div class="pull-right">
                                    <span class="bold"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_option_tree('name_of_second_number'); ?> </span>
                                    <span><a href="tel:<?php echo get_option_tree('enter_second_number'); ?>"><?php echo get_option_tree('enter_second_number'); ?></a></span>
                                </div>
                            </div>
                        </div>
                        <nav class="display_block">
                            <ul>	
				<?php 
                    $defaults = array(
                    'theme_location'  => 'header',
                    'menu'            => 'Header',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => ''
                   );

                wp_nav_menu( $defaults ); ?>
							
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

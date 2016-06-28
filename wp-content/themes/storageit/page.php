<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="container">         
    <div class="about-page">
		<?php while (have_posts()) : the_post(); ?>
           <div class="heading">
              <h1><?php the_title(); ?></h1>
           </div>
           <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
			         <?php the_post_thumbnail(); ?>
                     <?php the_content(); ?>
               </div>  
           </div>
          <?php endwhile; ?>
    </div>   
</div>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Contact Us Page
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
            <div class="storage_info display_block contact_us_cont">
                <div class="container">
                    <div class="text-center">
                         <?php while ( have_posts() ) : the_post(); ?>
                         <?php the_content();?>
                         <?php endwhile;?>
                        <div class="storage_content display_block">
                            <p class="wow fadeInUp"> <?php the_field('to_find_out_more_information',16); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact_cont display_block">
                <div class="map">
                    <?php 
                    $maps = get_field('maps',16);
                    if( !empty($maps) ): ?>
                   <div class="acf-map">
	                 <div class="marker" data-lat="<?php echo $maps['lat']; ?>" data-lng="<?php echo $maps ['lng']; ?>"></div>
                   </div>
                   <?php endif; ?>
                </div>
                <div class="contact_info">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 pull-right custom-form ">
									
									<?php echo do_shortcode('[contact-form-7 id="126" title="Contact us1"]'); ?>
                                       <!-- <li>
                                            <input class="pull-left name_input" type="text" placeholder="Name">
                                            <input class="pull-right mail_input" type="email" placeholder="Email">
                                        </li>
                                        <li>
                                            <input class="pull-left phone_input" type="text" placeholder="Phone">
                                            <input class="pull-right address_input" type="email" placeholder="Address">
                                        </li>
                                        <li>
                                            <textarea class="pull-left msg_input">Message</textarea>
                                            <div class="btn_sbmit pull-right">
                                                <input type="button" class="submit" value="Send">
                                            </div>
                                        </li>-->
                                <div class="address_cont display_block">
                                   <?php the_field('address',16); ?>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
			
<!--Google map script--> 
<style type="text/css">

.acf-map {
	width: 100%;
	height: 500px;
	border: #ccc solid 1px;
	margin: 0px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {
function new_map( $el ) {
	var $markers = $el.find('.marker');
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};	        	
	var map = new google.maps.Map( $el[0], args);
	map.markers = [];
	$markers.each(function(){
    	add_marker( $(this), map );
	});
	center_map( map );
	return map;
}
function add_marker( $marker, map ) {
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});
	map.markers.push( marker );
	if( $marker.html() )
	{
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open( map, marker );
		});
	}
}

function center_map( map ) {
	var bounds = new google.maps.LatLngBounds();

	$.each( map.markers, function( i, marker ){
		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
		bounds.extend( latlng );
	});
	
	if( map.markers.length == 1 )
	{
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		map.fitBounds( bounds );
	}
}
var map = null;

$(document).ready(function(){
	$('.acf-map').each(function(){
		map = new_map( $(this) );
	});
});
})(jQuery);
</script>			
<?php
get_footer();

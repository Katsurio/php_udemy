<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.0' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_yellow_scripts' );
function genesis_yellow_scripts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_script( 'flex-slider', get_stylesheet_directory_uri().'/js/jquery.flexslider-min.js', array(), CHILD_THEME_VERSION );
	wp_enqueue_script( 'yellow-js', get_stylesheet_directory_uri().'/js/yellow.js', array(), CHILD_THEME_VERSION );
	wp_enqueue_script( 'sticky-js', get_stylesheet_directory_uri().'/js/jquery.sticky.js', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 4 );

//* Custom footer text
add_filter('genesis_footer_creds_text', 'sp_footer_creds_filter');
function sp_footer_creds_filter( $creds ) {
	$creds = '[footer_copyright] &middot; <a href="http://mydomain.com">My Custom Link</a> &middot; Built on the <a href="http://www.studiopress.com/themes/genesis" title="Genesis Framework">Genesis Framework</a>';
	return $creds;
}

genesis_register_sidebar( array(
	'id'		=> 'bottom_footer',
	'name'		=> __( 'Bottom Footer', 'yellow' ),
	'description'	=> __( 'This is the widget area for the footer area', 'yellow' ),
));

//* Reposition nav menu
remove_action('genesis_after_header', 'genesis_do_nav');
add_filter('genesis_header','genesis_do_nav');

//* Remove default footer markup
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

//* Add featured Image and text to header
add_action('genesis_after_header','featured_image');
function featured_image() {
	if(!is_page_template( 'parallax-template.php' )) {
		?>
		<div class="featured-image" style="background-image: url(<?php echo get_field('featured_image')['url'];?>)">
			<div class="home-intro">
	        	<div class="wrap">
	        		<?php
	        		$class='';
	        		if( have_rows('featured_image_text') ):
					    while ( have_rows('featured_image_text') ) : the_row();
							if($i%3==0) {
	        				$class='first';
		        			} else {
		        				$class="";
		        			}
							?><div class="one-third <?php echo $class;?>"><?php
					        	the_sub_field('column');
					        ?></div><?php
					        $i++;
					    endwhile;
					endif;
					?>
	        	</div>
	        </div>
		</div>
		<?php
	}
}


add_action( 'genesis_after_footer', 'lower_footer' );
function lower_footer() {
	genesis_widget_area ('bottom_footer', array(
        'before' => '<div class="bottom-footer"><div class="wrap">',
        'after' => '</div></div>',
	) );
}


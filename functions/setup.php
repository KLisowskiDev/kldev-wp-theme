<?php
/*
 * Setup
 */

if ( ! function_exists('kldev_setup') ) {
	function kldev_setup() {

		add_theme_support( 'editor-styles' );
		add_editor_style('theme/css/editor.css');

		// Custom Logo
		add_theme_support( 'custom-logo' );

		// Gutenberg Blocks
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		
		// Support fot <title> tag
		add_theme_support('title-tag');

		// Support for featured image
		add_theme_support('post-thumbnails');

		// Set sizes for theme depends on Bootstrap 5 column max-sizes
		update_option('thumbnail_size_w', 285); /* max-width col-3 */
		update_option('small_size_w', 350); /* max-width col-4 */
		update_option('medium_size_w', 730); /* max-width col-8 */
		update_option('large_size_w', 1110); /* max-width col-12 */

		// Custom test size
		add_image_size( 'full-hd size', 1920, 9999 );

		// Support for the posts formats
		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat'
		) );
	}
}
add_action('init', 'kldev_setup');

// Gutenberg styles in the admin panel
add_action('admin_head', 'admin_styles');

function admin_styles() {
echo '<style>
.wp-block {max-width: 992;}
.wp-block[data-align="wide"] {max-width: 1280px;}
</style>';
}


// Function for generating data
if ( ! function_exists( 'kldev_post_date' ) ) {
	function kldev_post_date() {
		if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

			if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
				$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
			}

			$time_string = sprintf( $time_string,
				esc_attr( get_the_date( 'c' ) ),
				get_the_date()
			);

			echo $time_string;
		}
	}
}

// Opt for PSI score
function preload_for_css ( $html, $handle, $href, $media ) {

    if ( is_admin () )
    {
        return $html;
    }

    echo '<link rel="stylesheet preload" as="style" href="' . $href . '" media="all">';
}

add_filter ( 'style_loader_tag', 'preload_for_css', 10, 4 );

// Register main menu
register_nav_menu('main-menu', 'Main menu');

// Register footer menu
register_nav_menu('footer-menu', 'Footer menu');
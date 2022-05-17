<?php 

// Setting up Options Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ustawienia strony',
		'menu_title'	=> 'Konfiguracja',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // check if functions exsist.
    if( function_exists('acf_register_block_type') ) {

        // Register Ligthbox Gallery Block.
        acf_register_block_type(array(
            'name'              => 'gallery',
            'title'             => __('Galeria Lightbox'),
            'description'       => __('Galeria z Lightbox-em'),
            'render_template'   => 'template-parts/blocks/lightbox-gallery.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
        ));

        // Register Pricing Block
        acf_register_block_type(array(
            'name'              => 'pricing-table',
            'title'             => __('Cennik'),
            'description'       => __('Cennik z powtarzalnymi polami'),
            'render_template'   => 'template-parts/blocks/pricing-table.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
        ));

        // Register Block with Icon
        acf_register_block_type(array(
            'name'              => 'iconblock',
            'title'             => __('Ikona z tekstem'),
            'description'       => __('Ikona z nagłówkiem i tekstem'),
            'render_template'   => 'template-parts/blocks/iconblock.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
        ));
    }
}

// Fix for old ACF PRO version, media popup in Gutenberg problems.
function acf_filter_rest_api_preload_paths( $preload_paths ) {
	global $post;
	$rest_path    = rest_get_route_for_post( $post );
	$remove_paths = array(
		add_query_arg( 'context', 'edit', $rest_path ),
		sprintf( '%s/autosaves?context=edit', $rest_path ),
	);

	return array_filter(
		$preload_paths,
		function( $url ) use ( $remove_paths ) {
			return ! in_array( $url, $remove_paths, true );
		}
	);
}
add_filter( 'block_editor_rest_api_preload_paths', 'acf_filter_rest_api_preload_paths', 10, 1 );
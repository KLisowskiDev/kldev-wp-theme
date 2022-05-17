<?php
/*
 * Enqueues
 * Import styles and scripts
 */

if ( ! function_exists('kldev_enqueues') ) {
	function kldev_enqueues() {

		// Styles

		wp_register_style('bootstrapIcons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css', false, '1.7.1', null);
		wp_enqueue_style('bootstrapIcons');

		// wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css' );
		
		wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', false, '6.1.1', null);
		wp_enqueue_style('fontawesome');

		wp_register_style('swiperjs', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', false, '8.1.3', null);
		wp_enqueue_style('swiperjs');

		wp_register_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', false, '8.1.3', null);
		wp_enqueue_style('fancybox');

		wp_register_style('main', '/wp-content/themes/kldev/assets/css/main.css', false, false, null);
		wp_enqueue_style('main');

		// Scripts

		wp_register_script('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', false, '5.1.3', true);
		wp_enqueue_script('bootstrap5');
		
		wp_register_script('swiperjs', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', false, '8.1.3', true);
		wp_enqueue_script('swiperjs');
		
		wp_register_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', false, '8.1.3', true);
		wp_enqueue_script('fancybox');

		wp_register_script('main', '/wp-content/themes/kldev/assets/js/app.js', false, '1.0', true);
		wp_enqueue_script('main');
	}
}
add_action('wp_enqueue_scripts', 'kldev_enqueues', 100);
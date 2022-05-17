<?php
/*
 * Cleanup
 */

// <head> cleanup

if ( ! function_exists('kldev_cleanup_head') ) {
  function kldev_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
  }
}
add_action('init', 'kldev_cleanup_head');

// Remove jQuery
function kldev_remove_jquery() {
  if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', false);
  }
}
add_action('init', 'kldev_remove_jquery');

// Remove WP version

if ( ! function_exists('kldev_remove_generator') ) {
  function kldev_remove_generator()  {
    return '';
  }
}
add_filter( 'the_generator', 'no_generator' );

// Remove styles and scripts versions if u arent logged in

if ( ! function_exists('kldev_remove_script_version') ) {
  function kldev_remove_script_version( $src ) {
    if ( current_user_can('manage_options') ) {
      return $src;
    }
    if( strpos( $src, '?ver=' ) ) {
      $src = remove_query_arg( 'ver', $src );
      return $src;
    }
  }
}
add_filter( 'script_loader_src', 'kldev_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'kldev_remove_script_version', 15, 1 );
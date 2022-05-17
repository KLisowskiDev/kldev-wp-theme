<?php
/*
 * kldev theme functions and definitions
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

require get_template_directory() . '/functions/acf-settings.php';
require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/action-hooks.php';
require get_template_directory() . '/functions/navbar.php';
require get_template_directory() . '/functions/dimox-breadcrumbs.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/pagination.php';

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
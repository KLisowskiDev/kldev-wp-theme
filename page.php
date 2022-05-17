<?php
/**
 * Template for pages
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

  get_header(); 

?>

<main id="site-main">
  <?php
    the_content();
  ?>
</main>

<?php 
  get_footer();
?>
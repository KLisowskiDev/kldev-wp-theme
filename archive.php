<?php
/**
 * Archive Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
  get_header(); 
?>

<main id="site-main">
  <header class="container py-5 text-center">
    <h1 class="display-4 mt-3">
      <?php echo the_archive_title(); ?>
    </h1>
  </header>

  <?php get_template_part('loops/index-loop'); ?>

</main>

<?php 
  get_footer(); 
?>
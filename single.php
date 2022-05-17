<?php
/**
 * Post Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
  
  get_header();
  kldev_mainbody_before();
?>

<main id="site-main">

  <?php get_template_part('loops/single-post', get_post_format()); ?>

</main>

<?php
    get_footer();
?>
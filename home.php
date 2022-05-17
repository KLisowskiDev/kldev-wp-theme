<?php
/**
 * Template for blog posts
 * Learn more: https://wordpress.org/support/article/creating-a-static-front-page/
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

  get_header(); 

?>

<main id="site-main">
  <div class="container">
    <div class="row">
      <div class="test">
        <h2>Home.php</h2>
      </div>
    </div>
  </div>
  <?php
    get_template_part('loops/index-loop');
  ?>
</main>

<?php 
  get_footer();
?>
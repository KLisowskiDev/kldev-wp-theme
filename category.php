<?php
/**
 * Category Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

  get_header(); 
?>

<main id="site-main">

  <div class="container">
      <div class="row">
        <header class="container py-5 text-center">
            <h1 class="display-4 mt-3">
            <?php echo single_cat_title(); ?>
            </h1>
        </header>

        <?php
            get_template_part('loops/index-loop');
        ?>
      </div>
  </div>
</main>

<?php 
  get_footer(); 
?>
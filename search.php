<?php
/**
 * Template for search page
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

  get_header(); 
?>

<main id="site-main">
    <div class="container">
        <div class="row">
            <h2>Szukaj</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php 
                get_template_part('loops/search-results');
            ?>
        </div>
    </div>
</main>

<?php 
  get_footer(); 
?>
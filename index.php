<?php
/**
 * The main template file
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

  get_header(); 

?>

<main id="site-main">
  <?php
    get_template_part('loops/index-loop');
  ?>
    <div class="test">
        <p>Proin elit metus, maximus et consequat non, auctor id nulla. Etiam nec rhoncus nunc, sed lacinia arcu. In rhoncus, quam sed vehicula iaculis, est justo laoreet mauris, scelerisque vulputate mi tortor in dui. Nam congue et magna ut accumsan.</p>
    </div>
</main>

<?php 
  get_footer();
?>
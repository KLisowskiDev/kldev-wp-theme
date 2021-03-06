<?php
/**
 * Header for theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav id="site-navbar" class="container-fluid border-bottom navbar navbar-expand-md navbar-light bg-light">
    <div class="container">

      <?php kldev_navbar_brand();?>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="main-menu">
        <?php
          wp_nav_menu(array(
              'theme_location' => 'main-menu',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
              'depth' => 2,
              'walker' => new kldev_nav_menu_walker()
          ));
        ?>

        <?php kldev_navbar_search();?>    
      </div>
    </div>
  </nav>

</div>
  
</div>
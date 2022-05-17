<?php
/**
 * Widgets
 */

function kldev_widgets_init() {
  
  /**
   * Main
   */

   register_sidebar( array(
    'name'            => __( 'Mainbody Widget', 'kldev' ),
    'id'              => 'mainbody-widget-area-1',
    'description'     => __( 'Użyj 1, 2, 3 lub 4 widgetów.', 'kldev' ),
    'before_widget'   => '<div class="%1$s %2$s col-md">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );

  /**
   * Footer
   */

  register_sidebar( array(
    'name'            => __( 'Footer Widget', 'kldev' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'Użyj 1, 2, 3 lub 4 widgetów.', 'kldev' ),
    'before_widget'   => '<div class="%1$s %2$s col-md">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );

}
add_action( 'widgets_init', 'kldev_widgets_init' );
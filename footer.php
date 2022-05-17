<?php
/**
 * Footer for theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<footer id="site-footer" class="bg-light border-top border-bottom">

  <div class="container-xxl">

    <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row pt-5 pb-4" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>

  </div>

  <div class="container py-5">
    <div class="row">
        <?php if(has_custom_logo()) : ?>
        <div class="col-md-3">
          <h4><?php _e('O nas', 'kldev' ) ?></h4>
          <?php the_custom_logo(); ?>
        </div>
        <?php endif; ?>
        
        <div class="col-md-3">
          <h4><?php _e( 'Mapa strony', 'kldev' ) ?></h4>
          <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 0,
            ));
          ?>
        </div>

        <div class="col-md-3">
          <h4><?php _e('Dane kontaktowe', 'kldev' ) ?></h4>
          <ul>
            <?php
              $address_1 = get_field('address_1', 'option');
              $address_2 = get_field('address_2', 'option');
              $address_3 = get_field('address_3', 'option');
              $phone_number = get_field('phone_number', 'option');
              $address_email = get_field('address_email', 'option');
            ?>
            <li><?php echo _e('Adres', 'kldev' ) . ': ' . $address_1 . ', ' . $address_2 . ', ' . $address_3; ?></li>
            <li><?php echo _e('Telefon', 'kldev' ) . ': ' . '<a href="tel:'. str_replace(' ', '', $phone_number) . '">' . $phone_number . '</a>' ?></li>
            <li><?php echo _e('E-mail', 'kldev' ) . ': ' . '<a href="mailto:'. str_replace(' ', '', $address_email) . '">' . $address_email . '</a>' ?></li>
          </ul>
        </div>
        <?php if(have_rows('social_icons', 'option')) : ?>
        <div class="col-md-3">
          <h4><?php echo _e('Social media') ?></h4>
            <div class="footer__social-icons">
              <?php while( have_rows('social_icons', 'option')) : the_row(); ?> 
                <a href="<?php the_sub_field('social_link'); ?>" class="footer__social-item">
                  <i class="fa <?php the_sub_field('social_icon'); ?>"></i>
                </a>
              <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * Template for static front page
 * Learn more: https://wordpress.org/support/article/creating-a-static-front-page/
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

  get_header(); 

?>

<main id="site-main">

<?php if( have_rows('slider_repeater') ): ?>
  <section>
    <div class="slider">
      <div class="swiper">
      <div class="swiper-wrapper">
        <?php while( have_rows('slider_repeater') ): the_row(); 
            $background = get_sub_field('slider_background');
            $title = get_sub_field('slider_title');
            $desc = get_sub_field('slider_desc');
            ?>
            <div class="swiper-slide" style="background-image: url('<?php echo wp_get_attachment_image_url( $background, 'full-hd' ); ?>')">
              <div class="slider__content">
                <h2><?php the_sub_field('slider_title'); ?></h2>
                <p><?php the_sub_field('slider_desc'); ?></p>
              </div>
            </div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-pagination"></div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    </div>
  </section>
<?php endif; ?>


  <?php

    // Gutenberg Content
    the_content();
  ?>

  <section class="section section--light">
    <div class="container">
      <div class="row">
        <h2>Choose the featured posts in frontpage options.</h2>
      </div>

      <?php if( have_rows('homepage_posts') ): ?>
        <div class="row">
          <?php while( have_rows('homepage_posts') ): the_row(); ?>
              <?php $post_object = get_sub_field('homepage_post'); ?>
              <?php if( $post_object ): ?>
                  <?php // Override $post
                  $post = $post_object;
                  setup_postdata( $post );
                  ?>
                  <div class="col-md-6">
                    <?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'large', "", array( "class" => "img-fluid" )); ?>
                    <h2><?php the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>">Zobacz więcej</a>
                  </div>
                  <?php wp_reset_postdata();  ?>
              <?php endif; ?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
  </section>
</main>

<?php 
  get_footer();
?>
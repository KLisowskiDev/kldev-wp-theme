<?php
/*
 * The Single Post
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("single-post")?>>
    <header class="entry-header single-post__header">
      <div class="single-post__category">
        <i class="fa-solid fa-bookmark"></i>
        <span><?php the_category(', '); ?></span>
      </div>
      <h1 class="single-post__heading"><?php the_title()?></h1>
      <div class="single-post__meta">
        
        <div class="single-post__author">
          <?php _e('Author:', 'kldev'); echo '&nbsp;'; the_author_posts_link(); ?>
        </div>

        <div class="single-post__date">
          <i class="fa-solid fa-calendar"></i>
          <?php kldev_post_date(); ?>
        </div>
      </div>
    </header>
    <section class="single-post__thumbnail">
      <?php the_post_thumbnail('large', array( 'class' => 'img-fluid' )); ?>
    </section>

    <?php 
    // For posts with internal navigation
    // wp_link_pages(); 
    ?>

    <section class="container single-post__content">
      <?php the_content(); ?>
    </section>

    <?php 
    // For posts with internal navigation
    // wp_link_pages(); 
    ?>

  </article>

  <?php if (has_tag()) { ?>
    <div class="single-post__tag">
    <i class="fa-solid fa-tags"></i>
      <?php the_tags('Tagi: ', ', '); ?>
    </div>
  <?php  }; ?>

  <section class="section">
    <div class="container">
      <div class="row">
        
        <?php if (get_previous_post()) : ?>
        <div class="col-sm">
          <div class="navigation">
          <i class="navigation__icon fa-solid fa-circle-chevron-left"></i>
            <div>
            <?php _e('Poprzedni wpis', 'kldev') ?><br>
              <?php previous_post_link( '%link', '%title' ) ?>
            </div>
          </div>
        </div>
        <?php endif; ?>

        <?php if (get_next_post()) : ?>
          <div class="col-sm">
            <div class="navigation navigation--right">
            <i class="navigation__icon fa-solid fa-circle-chevron-right"></i>
            <div class="text-end">
            <?php _e('Następny wpis', 'kldev') ?><br>
              <?php next_post_link( '%link', '%title' ) ?>
            </div>
          </div>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </section>

  <?php
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>

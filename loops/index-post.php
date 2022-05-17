<?php
/*
 * The Index Post (or excerpt)
 */
?>


<article role="article" id="post_<?php the_ID()?>" <?php post_class("wrap-md entry-content pt-5"); ?> >
  <header class="article__header">
    <?php the_post_thumbnail('medium', array( 'class' => 'img-fluid' )); ?>
    <div class="article__header">
      <i class="fa-solid fa-bookmark"></i>
      <span class="article__category-name"><?php the_category(', '); ?></span>
    </div>
    <h2 class="article__heading">
      <a class="article__link" href="<?php the_permalink(); ?>">
        <?php the_title()?>
      </a>
    </h2>
  </header>

  <section class="article__body">
    <?php if ( has_excerpt( $post->ID ) ) {
    the_excerpt();
    ?><a href="<?php the_permalink(); ?>">
    	<?php _e( 'Czytaj więcej →', 'kldev' ) ?>
      </a>
  	<?php } else {
  	  the_content( __('Czytaj więcej →', 'kldev' ) );
	  } ?>

    <div class="article__info">
      <i class="fa-solid fa-calendar-days"></i> <?php kldev_post_date(); ?>
    </div>
  </section>
</article>
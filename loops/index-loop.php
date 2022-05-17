<?php
/*
 * The Default Loop
 * Use the [---more---], if you require post excerpt only
 */
?>


<div class="container">
      <div class="row">
      
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

      <div class="col-md-4">
        <?php get_template_part('loops/index-post', get_post_format()); ?>
      </div>
    
      <?php endwhile; ?>

      <?php bootstrap_pagination(); ?>

      <?php
      else :
        get_template_part('loops/404');
      endif;
?>
  </div>
</div>
<?php
/*
 * kldev Action Hooks
 * See “Dimox Breadcrumbs" below.
 */

// Navbar (in `header.php`)

function kldev_navbar_before() {
  do_action('navbar_before');
}

function kldev_navbar_after() {
  do_action('navbar_after');
}

function kldev_mainbody_before() {
  do_action('mainbody_before');
}

function kldev_navbar_brand() {
  if ( ! has_action('navbar_brand') ) {
     
    if ( ! has_custom_logo() ) : ?> 

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

		<?php 
    else :
			  the_custom_logo();
    endif;
  
  } else {
		do_action('navbar_brand');
	}
}
function kldev_navbar_search() {
  if ( ! has_action('navbar_search') ) {
    ?>
    <form class="d-flex" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="input-group">
        <input class="form-control border-secondary" type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php echo _e('Search'); echo ' ...' ?>" name="s" id="s">
        <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'kldev') ?>" class="btn btn-outline-secondary">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </form>
    <?php
  } else {
		do_action('navbar_search');
	}
}
/*
 * Dimox Breadcrumbs
 * ===========================
 * Example usage of hook
 * Inserting on single posts only
 */

function kldev_dimox_single_post() {
  if ( is_single() ) { ?>
    <?php if (function_exists('dimox_breadcrumbs')) { ?>
      <?php dimox_breadcrumbs(); ?>
    <?php } ?>
  <?php }
};

add_action( 'mainbody_before', 'kldev_dimox_single_post' );
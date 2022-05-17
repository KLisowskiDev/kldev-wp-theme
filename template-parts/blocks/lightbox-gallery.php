<?php

/**
 * Lightbox Gallery Block Template.
 *
**/

$images = get_field('gallery_lightbox');

if( $images ): ?>
    <div class="row">
    <?php foreach( $images as $image_id ): ?>
        <div class="col-md-3">
            <a href="<?php echo wp_get_attachment_image_url($image_id, 'large'); ?>" data-fancybox="Gallery Lightbox">
                <?php echo wp_get_attachment_image( $image_id, 'medium', '', array( "class" => "img-fluid" )); ?>
            </a>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php

/**
 * Iconblock Block Template.
 *
**/

$iconblocks = get_field('iconblock');

if( $iconblocks ): ?>
    <div class="row">
        <?php foreach( $iconblocks as $iconblock ) : ?>
            <?php 
                $icon = $iconblock['iconblock_icon'];
                $heading = $iconblock['iconblock_heading'];
                $text = $iconblock['iconblock_text'];
            ?>

            <div class="col-md-4">
                <div class="services__single">
                    <i class="services__icon <?php echo $icon; ?>"></i>
                    <h3 class="services__heading"><?php echo $heading; ?></h3>
                    <p class="services__desc"><?php echo $text; ?></p>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php

/**
 * Pricing Table Block Template.
 *
**/

if( have_rows('pricing_table') ): ?>

    <table class="table">  
    <?php 
    // Loop through rows.
    while ( have_rows('pricing_table') ) : the_row(); ?>   
        <?php 
        // Case: Table Heading.
        if( get_row_layout() == 'pricing_table_heading' ):
            $heading = get_sub_field('price_table_heading_single'); ?>

            <tr>
                <th><?php echo $heading['price_table_heading_single_first']; ?></th>
                <th><?php echo $heading['price_table_heading_single_second']; ?></th>
            </tr>

        <?php 
        // Case: Table Rows.
        elseif( get_row_layout() == 'pricing_table_row' ): 
            $rows = get_sub_field('price_table_row_single');     
            if($rows):

                foreach($rows as $row) : ?>
                
                <tr>
                    <td><?php echo $row['price_table_row_single_first']; ?></td>
                    <td><?php echo $row['price_table_row_single_second']; ?></td>
                </tr>

            <?php 
                endforeach;
            endif; 
            
        endif; ?>

    <?php // End loop.
    endwhile; ?>

    </table>
   
<?php 
// No value.
else :
    echo 'Podaj jakieś value ziomeczku';
endif;
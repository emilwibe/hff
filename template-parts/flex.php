<?php if ( have_rows('hff_flex_content') ) : ?>

    <?php while( have_rows('hff_flex_content') ) : ?>

        <?php
            if(get_row_layout == 'hff_img_wysiwyg') {
                get_template_part( 'template-parts/flex-modules/index-img-wysiwyg' );
            }
        ?>

    <?php endwhile; ?>

<?php endif; ?>

    
        if( get_row_layout() == 'paragraph' ):
            $text = get_sub_field('text');
            // Do something...

        // Case: Download layout.
        elseif( get_row_layout() == 'download' ): 
            $file = get_sub_field('file');
            // Do something...

        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
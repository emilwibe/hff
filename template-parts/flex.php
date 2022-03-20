<?php if ( have_rows('hff_flex_content') ) : ?>

    <?php while( have_rows('hff_flex_content') ) : the_row(); ?>

        <?php
            if(get_row_layout() == 'hff_img_wysiwyg') {
                get_template_part( 'template-parts/flex-modules/img-wysiwyg' );
            } elseif (get_row_layout() == 'hff_wysiwyg_img') {
                get_template_part( 'template-parts/flex-modules/wysiwyg-img' );
            }
        ?>

    <?php endwhile; ?>

<?php endif; ?>
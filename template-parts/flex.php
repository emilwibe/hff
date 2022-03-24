<?php if ( have_rows('hff_flex_content') ) : // INDEX ?>

    <?php while( have_rows('hff_flex_content') ) : the_row(); ?>

        <?php
            if(get_row_layout() == 'hff_img_wysiwyg') {
                get_template_part( 'template-parts/flex-modules/img-wysiwyg' );
            } elseif (get_row_layout() == 'hff_wysiwyg_img') {
                get_template_part( 'template-parts/flex-modules/wysiwyg-img' );
            } elseif (get_row_layout() == 'hff_cta_wysiwyg') {
                get_template_part('template-parts/flex-modules/cta-wysiwyg');
            }
        ?>

    <?php endwhile; ?>

<?php elseif(have_rows('hff_flex_content_singular')) : ?>

    <?php while(have_rows('hff_flex_content_singular')) : the_row(); ?>

        <?php
            if(get_row_layout() == 'hff_flex_wysiwyg') {
                get_template_part('template-parts/flex-modules/wysiwyg');
            } elseif (get_row_layout() == 'hff_flex_img') {
                get_template_part('template-parts/flex-modules/img');
            } elseif (get_row_layout() == 'hff_flex_cta') {
                get_template_part('template-parts/flex-modules/cta-singular');
            }

        ?>

    <?php endwhile; ?>

<?php endif; ?>
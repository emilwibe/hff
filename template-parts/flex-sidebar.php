<?php if(have_rows('hff_flex_sidebar')) : ?>

    <aside>
<?php while(have_rows('hff_flex_sidebar')) : the_row(); ?>

    <?php
        if(get_row_layout() == 'hff_sidebar_flex_wysiwyg') {
            get_template_part('template-parts/flex-modules/wysiwyg');
        } elseif (get_row_layout() == 'hff_sidebar_flex_img') {
            get_template_part('template-parts/flex-modules/img');
        } elseif (get_row_layout() == 'hff_sidebar_flex_cta') {
            get_template_part('template-parts/flex-modules/cta');
        }

    ?>

<?php endwhile; ?>

    </aside>
<?php endif; ?>
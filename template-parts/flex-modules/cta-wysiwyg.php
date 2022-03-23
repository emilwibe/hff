<div class="l-wrapper xl hff-mod hff-mod-cta-wysiwyg">
    <?php if (get_sub_field('hff_section_heading')) : ?>

    <div class="grid grid-16">
        <h2 class="section-heading"><?php the_sub_field('hff_section_heading'); ?></h2>
    </div>
    <?php endif; ?>

    <div class="grid grid-16 card-section">

        <?php if (get_sub_field('hff_flex_cta_text') && get_sub_field('hff_flex_cta_url')) : ?>
        
            <a href="<?php the_sub_field('hff_flex_cta_url'); ?>" class="cta" target="_blank"><?php the_sub_field('hff_flex_cta_text'); ?></a>

        <?php endif; ?>

        <?php if (get_sub_field('hff_wysiwyg')) : ?>

            <div class="wysiwyg card-layout">

            <?php the_sub_field('hff_wysiwyg'); ?>
            </div>

        <?php endif; ?>

    </div>

</div>
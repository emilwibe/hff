<div class="hdd-mod hdd-mod-img-wysiwyg">
    <?php if (get_sub_field('hff_section_heading')) : ?>

        <h2 class="section-heading"><?php the_sub_field('hff_section_heading'); ?></h2>
    <?php endif; ?>

    <div class="grid grid-16 card-section">

        <?php
        if (get_sub_field('hff_image')) {
            $imageID = get_sub_field('hff_image');

            echo wp_get_attachment_image($imageID, 'full', ['class' => 'fade-in-on-load', 'onload' => 'loadImageonLoad (this)']);
        }
        ?>

        <?php if (get_sub_field('hff_wysiwyg')) : ?>

            <div class="wysiwyg card-layout">

            <?php the_sub_field('hff_wysiwyg'); ?>
            </div>

        <?php endif; ?>

    </div>

</div>
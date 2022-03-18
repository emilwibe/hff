<div class="hdd-mod hdd-mod-img-wysiwyg">
    <?php if (get_sub_field('hff_section_heading')) : ?>

        <h2 class="section-heading"><?php the_sub_field('hff_section_heading'); ?></h2>
    <?php endif; ?>

    <div class="grid grid-16">

        <?php
        if (get_sub_field('hff_image')) {
            $imageID = get_sub_field('hff_image');

            echo wp_get_attachment_image($imageID, 'full');
        }
        ?>

        <?php if (get_sub_field('hff_wysiwyg')) : ?>

            <div class="wysiwyg">

            <?php the_sub_field('hff_wysiwyg'); ?>
            </div>

        <?php endif; ?>

    </div>

</div>
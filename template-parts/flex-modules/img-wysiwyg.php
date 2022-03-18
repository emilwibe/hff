<div class="hdd-mod hdd-mod-img-wysiwyg">
<?php if (get_sub_field('hff_section_heading')) : ?>

    <h2 class="section-heading"><?php the_sub_field('hff_section_heading'); ?></h2>
<?php endif; ?>

<div class="grid grid-16">

    <?php
        if (get_sub_field('hff_image')) {
            $imageID = get_sub_field('hff_image');

            wp_insert_attachment($imageID);
        }
    ?>

</div>

</div>
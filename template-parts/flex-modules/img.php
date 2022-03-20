<div class="hff-mod hff-mod-img">

<?php if (get_sub_field('hff_img_singular')) : ?>

    <?php
        $imageID = get_sub_field('hff_img_singular');

        echo wp_get_attachment_image($imageID, 'full', false, ['class' => 'primary-img fade-in-on-load', 'onload' => 'loadImageonLoad (this)']);
    ?>
    
    <?php if(get_sub_field('hff_img_text_singular')) : ?>

        <figcaption><?php the_sub_field('hff_img_text_singular'); ?></figcaption>

    <?php endif; ?>
<?php endif; ?>

</div>
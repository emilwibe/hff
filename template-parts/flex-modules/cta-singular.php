<?php if (get_sub_field('hff_cta_singular_url')) : ?>

    <a href="<?php the_sub_field('hff_cta_singular_url'); ?>" class="cta">

    <?php if(get_sub_field('hff_cta_singular_heading')) : ?>

        <span class="cta-heading"><?php the_sub_field('hff_cta_singular_heading'); ?></span>

    <?php endif; ?>

    <?php if(get_sub_field('hff_cta_singular_text')) : ?>

        <span class="cta-text"><?php the_sub_field('hff_cta_singular_text'); ?></span>

    <?php endif; ?>

    </a>

<?php endif; ?>
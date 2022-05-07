<?php if (get_sub_field('hff_cta_singular_url')) : ?>

    <div class="cta-singular hff-mod-cta">

        <a href="<?php the_sub_field('hff_cta_singular_url'); ?>" class="cta" target="_blank">
        <div>

            <?php if (get_sub_field('hff_cta_singular_heading')) : ?>

                <span class="cta-heading"><?php the_sub_field('hff_cta_singular_heading'); ?></span>

            <?php endif; ?>

            <?php if (get_sub_field('hff_cta_singular_text')) : ?>

                <span class="cta-text"><?php the_sub_field('hff_cta_singular_text'); ?></span>

            <?php endif; ?>

        </div>
        </a>

    </div>
    <!--/.hff-mod-cta-->
<?php endif; ?>
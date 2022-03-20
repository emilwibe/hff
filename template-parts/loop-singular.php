<?php if (have_posts()) : ?>

    < class="l-wrapper l grid lg-68-32">
    <?php while(have_posts()) : the_post(); ?>

    <main>
        <div class="wysiwyg">
            <?php the_content(); ?>
        </div>

        <?php get_template_part('template-parts/flex'); ?>
    </main>

        <?php get_template_part('template-parts/flex-sidebar'); ?>

    <?php endwhile; ?>

    </div><!--/.l-wrapper-->

<?php endif; ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <main>
        <div class="l-wrapper l">
            <?php while (have_posts()) : the_post(); ?>

                <div class="grid lg-25-75">

                    <?php get_template_part('template-parts/logo-index'); ?>

                    <div class="the_content">
                        <?php the_content(); ?>
                    </div>

                </div>

            <?php endwhile; ?>

        </div>
    </main>

<?php endif; ?>

<?php get_footer(); ?>
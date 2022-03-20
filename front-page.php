<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <main>
        <div class="l-wrapper xl">
            <?php while (have_posts()) : the_post(); ?>

                <div class="grid index-introduction">

                    <?php get_template_part('template-parts/logo-index'); ?>

                    <div class="the_content wysiwyg">
                        <?php the_content(); ?>
                    </div>

                </div>

                <?php get_template_part( 'template-parts/flex' ); ?>

            <?php endwhile; ?>

        </div>
    </main>

<?php endif; ?>

<?php get_footer(); ?>
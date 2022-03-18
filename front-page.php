<?php get_header(); ?>

    <?php if(have_posts()) : ?>

        <main>
            <div class="l-wrapper xl">
        <?php while(have_posts()) : the_post(); ?>

            <div class="row lg-20-80">
                <div>
                    <div>
                        <?php get_template_part('template-parts/logo-index'); ?>
                    </div>
                </div>
                <div>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>

            </div>
        </main>

    <?php endif; ?>

<?php get_footer(); ?>
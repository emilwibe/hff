<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <main>
        
            <?php while (have_posts()) : the_post(); ?>

            <div class="l-wrapper l">

                <div class="grid index-introduction">

                    <?php get_template_part('template-parts/logo-index'); ?>

                    <div class="the_content wysiwyg">
                        <?php the_content(); ?>
                    </div>

                </div>
                
            </div><!--/.l-wrapper-->

                <?php get_template_part( 'template-parts/flex' ); ?>

            <?php endwhile; ?>

    </main>

<?php endif; ?>

<?php get_footer(); ?>
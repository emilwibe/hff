<?php if (have_posts()) : ?>

    <div class="l-wrapper l grid lg-68-32">
    <?php while(have_posts()) : the_post(); ?>

    <main>
        <div class="wysiwyg">
            <?php the_content(); ?>
        </div>

        <?php get_template_part('template-parts/flex'); ?>
    </main>

    <aside>

    </aside>

    <?php endwhile; ?>

    </div><!--/.l-wrapper-->

<?php endif; ?>
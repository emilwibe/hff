<?php if (have_rows()) : ?>

    <div class="l-wrapper grid lg-32-68">
    <?php while(have_rows()) : the_post(); ?>

    <main>
        <div class="wysiwyg">
            <?php the_content(); ?>
        </div>
    </main>

    <aside>

    </aside>

    <?php endwhile; ?>

    </div><!--/.l-wrapper-->

<?php endif; ?>
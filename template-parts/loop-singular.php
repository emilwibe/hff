<?php if (have_posts()) : ?>

    <?php
        $colored_types = get_field('hff_strong_types_colored');
        $class_colored_types = "";

        if($colored_types[0] == 'true') {
            $class_colored_types = 'colored-types';
        }

        //var_dump($colored_types);
        
    ?>

    <div class="l-wrapper l grid lg-68-32 <?php echo $class_colored_types; ?>">
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
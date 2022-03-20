<?php get_header(); ?>

<?php
    if(is_singular()) {
        get_template_part('template-parts/loop-default');
    }
?>

<?php get_footer(); ?>
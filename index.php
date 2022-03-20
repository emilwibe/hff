<?php get_header(); ?>

<?php
    if(is_singular()) {
        get_template_part('template-parts/loop-singular');
    }
?>

<?php get_footer(); ?>
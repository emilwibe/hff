<?php
/**
 * Template Name: Højre kolonne
 * Template Post Type: post, page
 */
?>
<?php get_header(); ?>

<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

    <?php echo get_page_template_slug(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
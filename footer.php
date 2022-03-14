<footer class="footer primary">
    <div class="l-wrapper xl">
        
    <?php get_template_part('template-parts/logo-bottom'); ?>

    <?php get_template_part( 'template-parts/fyn-decor' ); ?>

    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidefod") ) : ?>
    <?php endif;?>
    
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>
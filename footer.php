<footer class="footer primary">
    <div class="l-wrapper l">
    
    <?php
    $logo_in_footer = get_field('hff_single_settings');
    var_dump($logo_in_footer);

    if ( $logo_in_footer && $logo_in_footer[0] == 'true') {
        get_template_part('template-parts/logo-bottom');
    }
    ?>

    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("hff_footer_info") ) : ?>
    <?php endif;?>

    </div>

    <?php get_template_part( 'template-parts/fyn-decor' ); ?>

</footer>

<script>

        {
            let navToggle = document.getElementById("nav-toggle");
            
            navToggle.addEventListener("click", function(){
                document.body.classList.toggle("nav-is-open");
            }, false);
        }

</script>

<?php wp_footer(); ?>
</body>

</html>
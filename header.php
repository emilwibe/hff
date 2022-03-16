<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="header primary">
        <div class="l-wrapper xl">
            <a href="<?php echo get_site_url(); ?>">Logo</a>

            <?php get_template_part( 'template-parts/nav-primary' ); ?>
        </div>
    </header>
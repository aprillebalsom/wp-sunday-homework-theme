<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Sunday Homework</title>
</head>
<body <?php body_class(); ?>>

    <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php
            $args = [
                'theme_location' => 'main-menu',
            ];
            wp_nav_menu( $args );
        ?>
    </nav>
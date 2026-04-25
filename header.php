<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> </head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="logo">
            <?php 
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
            ?>
        </div>

        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'container'      => false,
                'menu_class'     => 'nav-list',
            ));
            ?>
        </nav>

        <div class="header-cta">
            <a href="#contacto" class="btn-dacli">Solicitar Demo</a>
        </div>
    </div>
</header>
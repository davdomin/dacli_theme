<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container header-flex">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration:none;">
                    <span class="logo-main" style="color:var(--azul-profundo); font-weight:800; font-size:1.8rem;">DACLI</span><span class="logo-dot" style="color:var(--azul-dacli); font-weight:800; font-size:1.8rem;">.</span>
                </a>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">Inicio</a></li>
                    <li><a href="<?php echo home_url('/nosotros'); ?>">Nosotros</a></li>
                    <li><a href="<?php echo home_url('/modulos'); ?>">Módulos</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contacto')); ?>" class="btn-nav-blue">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="site-content">
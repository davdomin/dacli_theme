<?php get_header(); ?>

<main id="main-content" class="site-main">
    <div class="container">
        
        <?php if ( have_posts() ) : ?>
            
            <header class="page-header">
                <h1 class="page-title">Blog de Innovación en Laboratorios</h1>
                <p>Novedades sobre tecnología, gestión y calidad clínica.</p>
            </header>

            <div class="blog-grid">
                <?php
                while ( have_posts() ) :
                    the_post();
                    // Cargamos una parte visual pequeña para cada post
                    get_template_part( 'template-parts/content', get_post_format() );
                endwhile;

                // Paginación para cuando el blog crezca
                the_posts_navigation();
                ?>
            </div>

        <?php else : ?>
            
            <section class="no-results">
                <h2>No se encontraron artículos</h2>
                <p>Estamos trabajando en contenido nuevo para su laboratorio. ¡Vuelva pronto!</p>
            </section>

        <?php endif; ?>

    </div>
</main>

<?php get_sidebar(); ?> <?php get_footer(); ?>
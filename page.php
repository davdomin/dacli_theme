<?php get_header(); ?>

<main id="main-content" class="site-main page-standard">
    <?php while ( have_posts() ) : the_post(); ?>

        <section class="page-banner" style="background-color: var(--azul-dacli); color: var(--blanco); padding: 60px 0;">
            <div class="container">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </div>
        </section>

        <article id="post-<?php the_ID(); ?>" <?php post_class('container section-padding'); ?> style="background-color: var(--blanco); margin-top: -30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); padding: 40px;">
            <div class="entry-content">
                <?php 
                the_content(); 
                
                // Por si decides dividir una página larga en varias partes
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'dacli' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div>
        </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main id="main-content" class="site-main blog-single">
    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header" style="background-color: var(--azul-profundo); color: var(--blanco); padding: 60px 0; text-align: center;">
                <div class="container">
                    <div class="entry-meta" style="font-size: 0.9rem; text-transform: uppercase; margin-bottom: 15px; color: var(--azul-glaciar);">
                        Publicado el <?php echo get_the_date(); ?> | Por <?php the_author(); ?>
                    </div>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
            </header>

            <div class="container" style="max-width: 800px; margin-top: 40px;">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail" style="margin-bottom: 30px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="line-height: 1.8; font-size: 1.1rem; color: var(--azul-profundo);">
                    <?php the_content(); ?>
                </div>

                <nav class="post-navigation" style="border-top: 1px solid var(--azul-glaciar); margin-top: 50px; padding-top: 20px; display: flex; justify-content: space-between;">
                    <div class="nav-previous"><?php previous_post_link('%link', '&larr; Artículo anterior'); ?></div>
                    <div class="nav-next"><?php next_post_link('%link', 'Siguiente artículo &rarr;'); ?></div>
                </nav>
            </div>
        </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
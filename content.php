<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?> style="background: var(--blanco); border-radius: 8px; overflow: hidden; margin-bottom: 30px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
    
    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" class="post-thumbnail-link">
            <div class="card-image" style="height: 200px; overflow: hidden;">
                <?php the_post_thumbnail('medium_large', array('style' => 'width:100%; height:auto; object-fit:cover;')); ?>
            </div>
        </a>
    <?php endif; ?>

    <div class="card-body" style="padding: 20px;">
        <header class="entry-header">
            <div class="entry-meta" style="font-size: 0.8rem; color: var(--azul-glaciar); margin-bottom: 10px;">
                <?php echo get_the_date(); ?>
            </div>
            <?php the_title( sprintf( '<h2 class="entry-title" style="font-size: 1.4rem; margin-bottom: 15px;"><a href="%s" rel="bookmark" style="color: var(--azul-profundo); text-decoration: none;">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </header>

        <div class="entry-summary" style="font-size: 0.95rem; color: #555; margin-bottom: 20px;">
            <?php the_excerpt(); ?>
        </div>

        <footer class="entry-footer">
            <a href="<?php the_permalink(); ?>" class="read-more" style="color: var(--azul-dacli); font-weight: bold; text-decoration: none; font-size: 0.9rem;">
                Leer más &rarr;
            </a>
        </footer>
    </div>
</article>
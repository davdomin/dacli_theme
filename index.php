<?php get_header(); ?>

<div class="container" style="padding: 150px 0;">
    <h1 style="margin-bottom: 50px;">Blog & Actualizaciones</h1>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="card-modern">
                <?php if (has_post_thumbnail()) the_post_thumbnail('medium', ['style' => 'border-radius:10px; margin-bottom:20px;']); ?>
                <h2><a href="<?php the_permalink(); ?>" style="text-decoration:none; color:var(--azul-profundo);"><?php the_title(); ?></a></h2>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                <a href="<?php the_permalink(); ?>" style="color:var(--azul-dacli); font-weight:bold;">Leer más &rarr;</a>
            </article>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
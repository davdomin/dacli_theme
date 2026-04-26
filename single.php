<?php get_header(); ?>

<article class="section-padding" style="padding-top: 150px;">
    <div class="container" style="max-width: 800px;">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header style="margin-bottom: 40px; text-align: center;">
                <span style="color: var(--turquesa); font-weight: 700;"><?php echo get_the_date(); ?></span>
                <h1 style="font-size: 3rem; color: var(--azul-profundo); margin: 15px 0;"><?php the_title(); ?></h1>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <div style="border-radius: 20px; overflow: hidden; margin-bottom: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <?php the_post_thumbnail('full', ['style' => 'width:100%; height:auto; display:block;']); ?>
                </div>
            <?php endif; ?>

            <div class="post-content" style="font-size: 1.1rem; line-height: 1.8; color: #444;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
        
        <div style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #eee;">
            <a href="<?php echo home_url('/blog'); ?>" class="btn-outline" style="display: inline-block;">← Volver al Blog</a>
        </div>
    </div>
</article>

<?php get_footer(); ?>
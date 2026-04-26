<?php get_header(); ?>

<section class="section-padding" style="background: linear-gradient(to bottom, #f8faff, #ffffff);">
    <div class="container">
        <div class="section-header" data-aos="fade-up" style="text-align:center; margin-bottom:60px;">
            <span class="badge" style="color:var(--turquesa); font-weight:800; text-transform:uppercase; letter-spacing:2px;">Actualidad Dacli</span>
            <h1 style="font-size: 3rem; color: var(--azul-profundo); margin: 20px 0;">Blog y Noticias</h1>
            <p style="max-width: 700px; margin: 0 auto; opacity: 0.8;">Descubra las últimas actualizaciones sobre tecnología LIS, normativas de salud y consejos para optimizar su laboratorio.</p>
        </div>

        <div class="benefits-grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="benefit-card" data-aos="fade-up" style="text-align: left; display: flex; flex-direction: column;">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumb" style="margin-bottom: 20px; border-radius: 15px; overflow: hidden; height: 200px;">
                            <?php the_post_thumbnail('medium_large', ['style' => 'width:100%; height:100%; object-fit:cover;']); ?>
                        </div>
                    <?php else : ?>
                        <div style="width:100%; height:200px; background:var(--gris-neutro); border-radius:15px; margin-bottom:20px; display:flex; align-items:center; justify-content:center; color:var(--azul-glaciar); font-size:3rem;">📰</div>
                    <?php endif; ?>

                    <span style="color: var(--turquesa); font-size: 0.8rem; font-weight: 700; text-transform: uppercase;"><?php echo get_the_date(); ?></span>
                    <h3 style="color: var(--azul-profundo); margin: 10px 0; font-size: 1.4rem; line-height: 1.3;">
                        <a href="<?php the_permalink(); ?>" style="text-decoration:none; color:inherit;"><?php the_title(); ?></a>
                    </h3>
                    <p style="font-size: 0.95rem; opacity: 0.8; margin-bottom: 20px;">
                        <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" style="margin-top:auto; color:var(--azul-dacli); font-weight:700; text-decoration:none; font-size: 0.9rem;">Leer artículo completo →</a>
                </article>
            <?php endwhile; else : ?>
                <p style="text-align:center; grid-column: 1 / -1;">Próximamente publicaremos nuestras primeras noticias.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
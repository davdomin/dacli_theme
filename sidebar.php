<aside id="secondary" class="widget-area" style="padding: 20px; background-color: var(--blanco); border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
    
    <section class="widget widget_dacli_cta" style="margin-bottom: 30px; padding: 20px; background-color: var(--azul-dacli); color: var(--blanco); border-radius: 6px; text-align: center;">
        <h3 style="color: var(--blanco); font-size: 1.2rem;">¿Desea optimizar su laboratorio?</h3>
        <p style="font-size: 0.9rem; margin-bottom: 15px;">Pruebe dAcli y mejore la rapidez de sus resultados.</p>
        <a href="#contacto" class="btn-sidebar" style="display: inline-block; padding: 10px 20px; background-color: var(--turquesa-medico); color: var(--blanco); text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem;">Solicitar Demo</a>
    </section>

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <section class="widget">
            <h3 class="widget-title" style="color: var(--azul-profundo); border-bottom: 2px solid var(--azul-glaciar); padding-bottom: 5px;">Buscar</h3>
            <?php get_search_form(); ?>
        </section>

        <section class="widget" style="margin-top: 25px;">
            <h3 class="widget-title" style="color: var(--azul-profundo); border-bottom: 2px solid var(--azul-glaciar); padding-bottom: 5px;">Categorías</h3>
            <ul style="list-style: none; padding: 0;">
                <?php wp_list_categories( array( 'title_li' => '' ) ); ?>
            </ul>
        </section>
    <?php endif; ?>

</aside>
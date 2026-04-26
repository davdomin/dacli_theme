<?php
/**
 * Theme Page Section for our theme.
 *
 * @package ale8bits
 * @subpackage DacliWeb
 * @since DacliWeb 1.0
 */
get_header(); ?>

    <?php do_action( 'spacious_before_body_content' ); ?>

    <div id="primary" style="width: 100%; float: none; margin: 0 auto; max-width: 1200px; padding: 0 20px;">
        <div id="content" class="clearfix" style="text-align: center;">
            
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                </article>

                <?php
                    do_action( 'spacious_before_comments_template' );
                    // Solo cargar comentarios si es estrictamente necesario
                    if ( comments_open() || '0' != get_comments_number() ) {
                        echo '<div style="max-width: 800px; margin: 40px auto; text-align: left;">';
                        comments_template();
                        echo '</div>';
                    }
                    do_action ( 'spacious_after_comments_template' );
                ?>

            <?php endwhile; ?>

        </div></div><?php 
    /**
     * Eliminamos la función spacious_sidebar_select() 
     * para que no aparezca el círculo rojo que marcaste.
     */
    ?>

    <?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>
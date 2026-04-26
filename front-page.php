<?php
/**
 * Template Name: Front Page
 * The template for displaying the home page.
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section id="beneficios" class="section-padding">
        <div class="container">
            <div class="main-content-entry">
                <?php 
                // Aquí es donde "mudarás" todo el HTML de los beneficios 
                // Simplemente pégalo en el editor de la página en WordPress.
                the_content(); 
                ?>
            </div>
        </div>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
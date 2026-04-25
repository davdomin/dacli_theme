<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-info">
            <h3>dAcli Sistemas</h3>
            <p>Excelencia tecnológica para laboratorios que priorizan el bienestar de sus pacientes.</p>
        </div>

        <div class="footer-nav">
            <h4>Enlaces</h4>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-footer',
                'container'      => false,
                'menu_class'     => 'footer-links',
            ));
            ?>
        </div>

        <div class="footer-social">
            <h4>Síguenos</h4>
            <a href="https://www.linkedin.com/company/tu-empresa" target="_blank" rel="nofollow">LinkedIn</a>
            <p>Email: contacto@dacli.com</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> dAcli Sistemas. Todos los derechos reservados.</p>
    </div>
</footer>

<?php wp_footer(); ?> </body>
</html>
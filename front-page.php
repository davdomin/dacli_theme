<?php get_header(); ?>

<main class="landing-page">

    <section class="hero" style="background-color: var(--azul-profundo); color: var(--blanco); padding: 80px 0;">
        <div class="container text-center">
            <h1>Excelencia tecnológica para laboratorios que priorizan el bienestar de sus pacientes.</h1>
            <p>Optimice cada proceso con resultados de excelente calidad y rapidez.</p>
            <a href="#contacto" class="btn-dacli" style="background-color: var(--turquesa-medico);">Solicitar Demo</a>
        </div>
    </section>

    <section id="modulos" class="section-padding">
        <div class="container">
            <h2 class="text-center">Nuestros Módulos</h2>
            <div class="modulos-grid">
                <?php 
                $modulos = [
                    'Toma de pedido (Recepción)', 'Toma de muestras', 'Facturación (Homologada)',
                    'Presupuestos', 'Órdenes de trabajo', 'Gestión de compras y Retenciones',
                    'Gestor de resultados', 'Envío por WhatsApp/Correo', 'Reportes Financieros',
                    'Gestión de usuarios', 'Respaldo de datos (Backup)'
                ];
                foreach ($modulos as $modulo) : ?>
                    <div class="modulo-card">
                        <i class="icon-check"></i> p><?php echo $modulo; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="tecnologias" style="background-color: var(--gris-neutro);">
        <div class="container text-center">
            <h3>Tecnologías Robustas</h3>
            <div class="tech-logos">
                <span>SQL SERVER</span> | <span>ORACLE</span> | <span>SITEF</span> | <span>MICROSOFT</span> | <span>PHP</span> | <span>WHATSAPP</span>
            </div>
        </div>
    </section>

    <section id="nosotros" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>¿Quiénes somos?</h2>
                    <p>dAcli es un sistema de atención integral diseñado para adaptarse a las necesidades de su laboratorio clínico...</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
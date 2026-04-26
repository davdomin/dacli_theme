<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <span class="badge" style="color:var(--turquesa); font-weight:800; text-transform:uppercase; letter-spacing:2px;">Tecnología Médica de Precisión</span>
        <h1>Excelencia tecnológica para laboratorios clínicos</h1>
        <p class="hero-subtitle">Optimizamos los procesos de su laboratorio con un sistema inteligente, seguro y fácil de usar. Diseñado para el bienestar de sus pacientes.</p>
        <div class="hero-btns">
            <a href="#beneficios" class="btn-premium">Descubrir Beneficios</a>
            <a href="<?php echo home_url('/nosotros'); ?>" class="btn-outline">Saber más</a>
        </div>
    </div>
</section>

<section class="tech-strip">
    <div class="container">
        <p>Potenciado por las mejores tecnologías mundiales</p>
        <div class="tech-logos">
            <span>SQL SERVER</span>
            <span>ORACLE</span>
            <span>MICROSOFT</span>
            <span>PHP</span>
            <span>MYSQL</span>
            <span>WHATSAPP</span>
        </div>
    </div>
</section>

<section id="beneficios" class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2>¿Por qué elegir DACLI para su laboratorio?</h2>
            <p>Soluciones diseñadas para laboratorios que buscan escalar su eficiencia.</p>
        </div>

        <div class="benefits-grid">
            <div class="benefit-card">
                <span style="font-size:3rem;">🚀</span>
                <h3>Automatización Total</h3>
                <p>Reduzca los tiempos de entrega de resultados eliminando procesos manuales y errores humanos.</p>
            </div>
            <div class="benefit-card">
                <span style="font-size:3rem;">🔒</span>
                <h3>Máxima Seguridad</h3>
                <p>Sus datos están protegidos con respaldos automáticos y encriptación de nivel médico.</p>
            </div>
            <div class="benefit-card">
                <span style="font-size:3rem;">📱</span>
                <h3>Conectividad Inmediata</h3>
                <p>Notifique a sus pacientes directamente a través de WhatsApp y correo electrónico.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
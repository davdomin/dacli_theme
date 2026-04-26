<?php 
/* Template Name: Página de Módulos */
get_header(); ?>

<section class="section-padding" style="background: linear-gradient(to bottom, var(--gris-neutro), var(--blanco));">
    <div class="container">
        <div class="section-header" data-aos="fade-up" style="text-align:center; margin-bottom:60px;">
            <span class="badge" style="color:var(--turquesa); font-weight:800; text-transform:uppercase; letter-spacing:2px;">Ecosistema Dacli</span>
            <h1 style="font-size: 3rem; color: var(--azul-profundo); margin: 20px 0;">Módulos del Sistema</h1>
            <p style="max-width: 700px; margin: 0 auto; opacity: 0.8;">Explore todas las herramientas diseñadas para automatizar y optimizar la gestión integral de su laboratorio clínico.</p>
        </div>

        <div class="benefits-grid">
            <?php 
            $todos_los_modulos = [
                ['Toma de pedido', 'Gestión de Recepción ágil y eficiente para el ingreso de pacientes.', '📝'],
                ['Toma de muestras', 'Control y trazabilidad total en la fase pre-analítica.', '🧪'],
                ['Facturación', 'Módulo homologado para cumplimiento fiscal y comercial.', '💰'],
                ['Presupuestos', 'Generación rápida de cotizaciones para pacientes y empresas.', '📊'],
                ['Ordenes de trabajo', 'Organización diaria para optimizar el flujo del laboratorio.', '🗓️'],
                ['Gestión de compras', 'Control de inventarios y retenciones homologadas.', '🛒'],
                ['Gestor de resultados', 'Centralización y validación técnica de resultados médicos.', '🔬'],
                ['Envío Automático', 'Resultados entregados al instante por WhatsApp y Correo.', '📱'],
                ['Reportes Avanzados', 'Estadísticas operativas, financieras y gráficas en tiempo real.', '📈'],
                ['Seguridad de Perfiles', 'Gestión jerárquica de usuarios y permisos de acceso.', '🛡️'],
                ['Respaldo de Datos', 'Backup automático para garantizar la seguridad total.', '☁️']
            ];

            foreach($todos_los_modulos as $m): ?>
                <div class="benefit-card" data-aos="fade-up">
                    <span style="font-size:2.5rem;"><?php echo $m[2]; ?></span>
                    <h3 style="color: var(--azul-dacli); margin: 15px 0;"><?php echo $m[0]; ?></h3>
                    <p style="font-size: 0.9rem; opacity: 0.8;"><?php echo $m[1]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="contacto" class="section-padding" style="background: var(--azul-profundo); color: white; text-align: center;">
    <div class="container">
        <h2>¿Desea ver estos módulos en acción?</h2>
        <p style="margin-bottom: 30px; opacity: 0.8;">Agende una videollamada para una demostración personalizada.</p>
        <a href="mailto:ventas@dacli.com" class="btn-premium" style="background: var(--turquesa);">Solicitar Demo Gratis</a>
    </div>
</section>

<?php get_footer(); ?>
<?php 
/* Template Name: Página Contacto */
get_header(); ?>

<section class="section-padding" style="padding-top: 150px; background: #fdfdfd; min-height: 100vh;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 60px;">
            <span style="color:var(--turquesa); font-weight:800; text-transform:uppercase; letter-spacing:2px; font-size: 0.9rem;">Atención Personalizada</span>
            <h1 style="font-size: 3.5rem; color: var(--azul-profundo); margin: 15px 0; font-weight: 800;">Hablemos de su Laboratorio</h1>
            <p style="max-width: 600px; margin: 0 auto; opacity: 0.7; font-size: 1.1rem;">Estamos listos para ayudarle a digitalizar sus procesos.</p>
        </div>

        <div style="display: flex; flex-wrap: wrap; gap: 50px; align-items: flex-start;">
            
            <div style="flex: 1; min-width: 300px;">
                <div style="margin-bottom: 40px;">
                    <h3 style="color: var(--azul-dacli); font-size: 1.8rem; margin-bottom: 20px;">Información de Contacto</h3>
                    <p style="margin-bottom: 15px; font-size: 1.05rem;">📍 <strong>Ubicación:</strong> Ciudad, País (Dirección DACLI)</p>
                    <p style="margin-bottom: 15px; font-size: 1.05rem;">📧 <strong>Correo:</strong> ventas@dacli.com</p>
                    <p style="margin-bottom: 15px; font-size: 1.05rem;">📞 <strong>Teléfono:</strong> +51 999 888 777</p>
                    <p style="margin-bottom: 15px; font-size: 1.05rem;">🕒 <strong>Horario:</strong> Lun - Vie: 9:00 AM - 6:00 PM</p>
                </div>
                
                <div style="background: var(--azul-profundo); color: white; padding: 35px; border-radius: 25px; box-shadow: 0 10px 30px rgba(42, 63, 123, 0.2);">
                    <h4 style="margin-top:0; font-size: 1.4rem; color: var(--turquesa);">Soporte Técnico</h4>
                    <p style="opacity: 0.9; line-height: 1.6;">¿Ya es cliente de DACLI? Acceda a nuestro portal de tickets o escriba directamente a:</p>
                    <p style="font-weight: 700; font-size: 1.1rem; margin-top: 10px;">soporte@dacli.com</p>
                </div>
            </div>

            <div style="flex: 1.5; min-width: 300px; background: white; padding: 45px; border-radius: 30px; box-shadow: 0 20px 50px rgba(0,0,0,0.05); overflow: hidden;">
                <div class="form-wrapper-dacli">
                    <?php 
                        // REEMPLAZA EL NUMERO POR TU ID REAL
                        echo do_shortcode('[wpforms id="41"]'); 
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
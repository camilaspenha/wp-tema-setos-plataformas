<?php
/**
 * Title: Logos
 * Slug: setos/contact-section
 * Categories: featured
 * Viewport width: 1400
 */
?>
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contato</h2>
      <p>Solicite um Orçamento</p>
    </div>

    <div class="row mt-5">
      <div class="col-lg-4">
        <div class="info">
          <div class="email">
            <i class="bi bi-envelope-at"></i>
            <h4>Email:</h4>
            <a class="ms-3" href="mailto:<?= get_theme_mod('social-email') ?>" title="Link para Enviar um E-mail">contato@setosplataformas.com.br</a>
          </div>

          <div class="phone">
            <i class="bi bi-whatsapp"></i>
            <h4>Fone:</h4>            
            <a class="ms-3" href="<?= get_theme_mod('social-whatsapp-api') ?>" target="_blank" title="Abre Página Externa - Whatsapp Web">
            <?= get_theme_mod('social-whatsapp'); ?>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">
       <!-- wp:pattern {"slug":"setos/contact-form"} /-->
      </div>
    </div>

  </div>
</section>
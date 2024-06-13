<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: setos/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
	<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <img width="200px" src="<?= get_template_directory_uri() . '/assets/img/logo_white_icon2.svg'?>" alt="Logo SETOS Plataformas" class="img-fluid">
              <p class="ps-2">
                <br />
                <br />
                <strong>Fone:</strong>
								<a href="https://wa.me/+5511964623699?text=Olá, vi seu site e gostaria de obter um orçamento." target="_blank" title="Abre Página Externa - Whatsapp Web">
									<span class="text-white">+55 11 96462-3699</span> 
								</a>
								<br>
                <strong>E-mail:</strong>
								<a class="text-white" href="mailto:contato@setosplataformas.com.br" title="Link para Enviar um E-mail">contato@setosplataformas.com.br</a>
								<br>
              </p>
              
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li>
								<i class="bx bx-chevron-right"></i> 
								<a class="nav-link active" href="<?= get_bloginfo('url') ?>" title="<?= get_bloginfo('url') ?>">Home</a>
							</li>
							<li>
								<i class="bx bx-chevron-right"></i> 
								<a class="nav-link active" href="<?= get_bloginfo('url') . '/manutencao-plataformas' ?>" title="<?= get_bloginfo('url') ?>">Manutenção</a>
							</li>
              <li>
								<i class="bx bx-chevron-right"></i> 
								<a class="nav-link active" href="<?= get_bloginfo('url') . '/treinamento-plataformas' ?>" title="<?= get_bloginfo('url') ?>">Treinamento</a>
							</li>
              <li>
								<i class="bx bx-chevron-right"></i> 
								<a class="nav-link active" href="<?= get_bloginfo('url') . '/contato' ?>" title="<?= get_bloginfo('url') ?>">Contato</a>
							</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Locação de Plataformas</h4>
            <ul>
              <li>
								<i class="bx bx-chevron-right"></i>
								<a href="<?= get_bloginfo('url') . '/plataforma-articulada' ?>" title="<?= get_bloginfo('url') . '/plataforma-articulada' ?>">Plataforma Articulada</a>
							</li>
              <li>
							<i class="bx bx-chevron-right"></i>
								<a href="<?= get_bloginfo('url') . '/plataforma-mastro' ?>" title="<?= get_bloginfo('url') . '/plataforma-mastro' ?>">Plataforma de Mastro</a>
							</li>
							<li>
							<i class="bx bx-chevron-right"></i>
								<a href="<?= get_bloginfo('url') . '/plataforma-tesoura' ?>" title="<?= get_bloginfo('url') . '/plataforma-tesoura' ?>">Plataforma Tesoura</a>
							</li>
              <li>
							  <i class="bx bx-chevron-right"></i>
								<a href="<?= get_bloginfo('url') . '/plataforma-telescopica' ?>" title="<?= get_bloginfo('url') . '/plataforma-telescopica' ?>">Plataforma Telescópica</a>
							</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Redes Sociais</h4>
            <div class="social-links mt-3">
              <a title="Em Breve" href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a title="Em Breve" href="#" class="google-plus"><i class="bx bxl-linkedin"></i></a>
              <a title="Em Breve" href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://wa.me/+5511964623699?text=Olá, vi seu site e gostaria de obter um orçamento." target="_blank" title="Abre Página Externa - Whatsapp Web" class="instagram"><i class="bx bxl-whatsapp"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       2024 &copy; Copyright <strong><span>Setos Plataformas</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	</body>
</html>
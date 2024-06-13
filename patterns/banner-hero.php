<?php
/**
 * Title: Hero
 * Slug: setos/banner-hero
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-lg-6 d-flex text-start align-items-center">
        <div>
          <h1>SETOS PLATAFORMAS</h1>
          <h2>Alugue, suba e conquiste</h2>
          <h5>Com nossas plataformas elevatórias, o céu é o limite para os seus projetos.</h5>
          <a href="#about" class="get-started-btn scrollto my-5"> Saiba Mais</a>
        </div>
      </div>
      <div class="col-lg-6 contact">
       <!-- wp:pattern {"slug":"setos/contact-form"} /-->  
      </div>
    </div>

    <div class="row gy-4 mt-5 justify-content-center d-none" data-aos="zoom-in" data-aos-delay="250">
      
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <img src="<?= get_template_directory_uri() . '/assets/img/icon_locacao.svg'?>" alt="">
          <h3><a href="">Locação</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <img src="<?= get_template_directory_uri() . '/assets/img/icon_manutencao.svg' ?>" alt="">
          <h3><a href="">Manutenção</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <img src="<?= get_template_directory_uri() . '/assets/img/icon_treinamento.svg' ?>" alt="">
          <h3><a href="">Treinamento</a></h3>
        </div>
      </div>
    </div>

  </div>
</section>


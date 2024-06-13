<?php
/**
 * Title: Main Nav
 * Slug: setos/main-nav
 * Categories: header
 * Viewport width: 1400
 */
?>
<div class="container d-flex align-items-center justify-content-lg-between">
  <a href="<?= get_bloginfo('url') ?>" class="logo me-auto me-lg-0">
    <img width="200px" src="<?= get_template_directory_uri() . '/assets/img/logo_white_icon2.svg'?>" alt="" class="img-fluid">
  </a>

  <nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
      <li><a class="nav-link scrollto active" href="<?= get_bloginfo('url') ?>" title="<?= get_bloginfo('url') ?>">Home</a></li>
      <li class="dropdown"><a href="#"><span>Locação de Plataformas</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li class="d-flex align-items-center">
            <img width="28px" src="<?= get_template_directory_uri() . '/assets/img/icon_articulada.svg' ?>" alt="" class="ms-3">
            <a href="<?= get_bloginfo('url') . '/plataforma-articulada' ?>" title="<?= get_bloginfo('url') . '/plataforma-articulada' ?>">Plataforma Articulada</a>
          </li>
          <li class="d-flex align-items-center">
            <img width="28px" src="<?= get_template_directory_uri() . '/assets/img/icon_mastro.svg' ?>" alt="" class="ms-3">
            <a href="<?= get_bloginfo('url') . '/plataforma-mastro' ?>" title="<?= get_bloginfo('url') . '/plataforma-mastro' ?>">Plataforma de Mastro</a>
          </li>
          <li class="d-flex align-items-center">
            <img width="28px" src="<?= get_template_directory_uri() . '/assets/img/icon_telescopica.svg' ?>" alt="" class="ms-3">
            <a href="<?= get_bloginfo('url') . '/plataforma-telescopica' ?>" title="<?= get_bloginfo('url') . '/plataforma-telescopica' ?>">Plataforma Telescópica</a>
          </li>
          <li class="d-flex align-items-center">
            <img width="28px" src="<?= get_template_directory_uri() . '/assets/img/icon_tesoura.svg' ?>" alt="" class="ms-3">
            <a href="<?= get_bloginfo('url') . '/plataforma-tesoura' ?>" title="<?= get_bloginfo('url') . '/plataforma-tesoura' ?>">Plataforma Tesoura</a>
          </li>              
        </ul>
      </li>
      <li class="dropdown"><a href="#"><span>Serviços</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li class="d-flex align-items-center">
            <i class="bi bi-tools ms-3"></i>
            <a href="<?= get_bloginfo('url') . '/manutencao-plataformas' ?>" title="<?= get_bloginfo('url') . '/manutencao-plataformas' ?>">Manutenção de Plataformas</a>
          </li>
          <li class="d-flex align-items-center">
            <i class="bi bi-easel-fill ms-3"></i>
            <a href="<?= get_bloginfo('url') . '/treinamento-plataformas' ?>" title="<?= get_bloginfo('url') . '/treinamento-plataformas' ?>">Treinamento</a></li>
        </ul>
      </li>
      <li><a class="nav-link scrollto" href="<?= get_bloginfo('url') . '/contato' ?>" title="<?= get_bloginfo('url') . '/contato' ?>">Contato</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>

  <a href="https://wa.me/+5511964623699?text=Olá, vi seu site e gostaria de obter um orçamento." target="_blank" title="Abre Página Externa - Whatsapp Web" class="get-started-btn scrollto">
    <i class="bi bi-whatsapp me-1"></i>
    <span class="d-none d-md-inline">+55 11 96462-3699</span>
  </a>
</div>
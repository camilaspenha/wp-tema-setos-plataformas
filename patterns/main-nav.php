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

    <?php
      $args = array(
        'menu' => 'principal',
        'container' => 'ul',
        'theme_location' => 'my-custom-menu',
        'menu_class' => '',
      );
      wp_nav_menu( $args );
    ?> 
    
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>

  <a href="<?= get_theme_mod('social-whatsapp-api') ?>" target="_blank" title="Abre Página Externa - Whatsapp Web" class="get-started-btn">
    <i class="bi bi-whatsapp me-1"></i>
    <span class="d-none d-xl-inline"><?= get_theme_mod('social-whatsapp'); ?></span>
  </a>
</div>
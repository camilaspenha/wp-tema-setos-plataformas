<?php
/**
 * Title: Main Template
 * Slug: setos/page-main-template
 * Categories: setos_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
 global $post;
 $post_slug = $post->post_name;
?>

<?php if(is_front_page()) { ?>
  <!-- wp:pattern {"slug":"setos/page-home-business"} /-->
<?php } else { ?>

  <!-- wp:pattern {"slug":"setos/breadcrumbs-template"} /-->

  <?php switch ($post_slug) {
    case 'manutencao-plataformas': ?>
      <!-- wp:pattern {"slug":"setos/page-manutencao-plataformas"} /-->
    <?php break;

    case 'treinamento-plataformas': ?>
      <!-- wp:pattern {"slug":"setos/page-treinamento-plataformas"} /-->
    <?php break;

    case 'plataforma-articulada': ?>
      <!-- wp:pattern {"slug":"setos/page-plataforma-articulada"} /-->
    <?php break;

    case 'plataforma-mastro': ?>
      <!-- wp:pattern {"slug":"setos/page-plataforma-mastro"} /-->
    <?php break;

    case 'plataforma-telescopica': ?>
      <!-- wp:pattern {"slug":"setos/page-plataforma-telescopica"} /-->
    <?php break;

    case 'plataforma-tesoura': ?>
      <!-- wp:pattern {"slug":"setos/page-plataforma-tesoura"} /-->
    <?php break;

    case 'contato': ?>
     <!-- wp:pattern {"slug":"setos/contact-section"} /-->  
      <!-- wp:pattern {"slug":"setos/cta-section"} /-->  
    <?php break;
  } 
} 
?>

   

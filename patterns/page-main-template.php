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
 $page_id = get_the_ID();
?>

<?php if(is_front_page()) { ?>
  <!-- wp:pattern {"slug":"setos/page-home-business"} /-->
<?php } else { ?>

  <!-- wp:pattern {"slug":"setos/breadcrumbs-template"} /-->

  <?php switch ($page_id) {
    case 55: ?>
      <!-- wp:pattern {"slug":"setos/page-manutencao-plataformas"} /-->
    <?php break;

    case 57: ?>
      <!-- wp:pattern {"slug":"setos/page-treinamento-plataformas"} /-->
    <?php break;

    case 59: ?>
      <!-- wp:pattern {"slug":"setos/page-plataforma-articulada"} /-->
    <?php break;

    case 61: ?>
      <!-- wp:pattern {"slug":"setos/page-plataforma-mastro"} /-->
    <?php break;

    case 63: ?>
      <!-- wp:pattern {"slug":"setos/page-plataforma-telescopica"} /-->
    <?php break;

    case 65: ?>
      <!-- wp:pattern {"slug":"setos/page-plataforma-tesoura"} /-->
    <?php break;

    case 67: ?>
     <!-- wp:pattern {"slug":"setos/contact-section"} /-->  
      <!-- wp:pattern {"slug":"setos/cta-section"} /-->  
    <?php break;
  } 
} 
?>

   

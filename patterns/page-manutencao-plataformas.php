<?php
/**
 * Title: Manutenção
 * Slug: setos/page-manutencao-plataformas
 * Categories: setos_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
$fields = get_fields();

/**
 * Inner Page
 */
get_template_part( 'parts/template-parts/inner-page','', $fields);
?>

  <!-- wp:pattern {"slug":"setos/contact-section"} /-->  
  <!-- wp:pattern {"slug":"setos/cta-section"} /-->  
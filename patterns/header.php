<?php
/**
 * Title: Header
 * Slug: setos/header
 * Categories: 
 * Viewport width: 1400
 */
  global $post;
  $post_slug = $post->post_name;
  $header_class = '';
?>

<?php if(!is_front_page()) { 
  $header_class = ' header-inner-pages'; ?>
<?php } ?>

<header id="header" class="fixed-top<?= $header_class ?>">
  <!-- wp:pattern {"slug":"setos/main-nav"} /-->
</header>
<?php
/**
 * Title: Page Breadcrumb
 * Slug: setos/breadcrumbs-template
 * Categories: featured
 * Viewport width: 1400
 */
?>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2><?php wp_title(''); ?></h2>
      <ol>
        <li><a href="<?= get_bloginfo('url') ?>" title="Link para a Home">Home</a></li>
        <li><?php wp_title(''); ?></li>
      </ol>
    </div>
  </div>
</section><!-- End Breadcrumbs -->
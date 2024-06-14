<?php

/**
 * Custom Page Title
 *
 * @since Setos 1.0
 * @return void
 */

 function my_custom_site_title($title) {
  if (is_home() || is_front_page()) {
      $title = 'SETOS Plataformas | Alugue Plataformas Elevatórias';
  } elseif (is_single()) {
      $title = get_the_title() . ' | ' . get_bloginfo('name');
  } elseif (is_category()) {
      $title = single_cat_title('', false) . ' | ' . get_bloginfo('name');
  } else {
      $title .=get_the_title() . ' | ' . get_bloginfo('name');
  }
  return $title;
}
add_filter('pre_get_document_title', 'my_custom_site_title');

/**
* Custom Favicon
*
* @since Setos 1.0
* @return void
*/

function my_custom_favicon() {
echo '<link rel="icon" type="image/svg" href="' . get_template_directory_uri() . '/assets/img/icon.svg">';
}
add_action('wp_head', 'my_custom_favicon');

?>
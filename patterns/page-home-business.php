<?php
/**
 * Title: Business home
 * Slug: setos/page-home-business
 * Categories: setos_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
  $fields = get_fields();

  /**
   * Banner Hero
   */
  $banner_hero = array(
    'banner_hero_title' => $fields['banner_hero_title'],
    'banner_hero_subtitle' => $fields['banner_hero_subtitle'],
    'banner_hero_description' => $fields['banner_hero_description'], 
  );
  get_template_part( 'parts/template-parts/banner-hero','', $banner_hero);

  /**
   * About Section
   */
  $about_section = array(
    'about_title' => $fields['about_title'],
    'about_list' => $fields['about_list'],
    'about_img' => $fields['about_img']
  );
  get_template_part( 'parts/template-parts/about-section','',$about_section);

  /**
   * Products Cards
   */
  $products_cards = array(
    'product_card' => $fields['product_card'],
  );
  get_template_part( 'parts/template-parts/products-cards','',$products_cards);

  /**
   * Services Section
   */
  $services_section = array(
    'service_card' => $fields['service_card'],
  );
  get_template_part( 'parts/template-parts/services-section','',$services_section);

  /**
   * Training Section
   */
  $training_section = array(
    'training_feature_list' => $fields['training_feature_list'],
    'slider_training' => $fields['slider_training']
  );
  get_template_part( 'parts/template-parts/training-section','',$training_section);

  /**
   * Logos Section
   */
  $logos_section = array(
    'logo' => $fields['logo'],
  );
  get_template_part( 'parts/template-parts/logos-section','',$logos_section);
?>
  
  <!-- wp:pattern {"slug":"setos/contact-section"} /-->  
  <!-- wp:pattern {"slug":"setos/cta-section"} /-->  


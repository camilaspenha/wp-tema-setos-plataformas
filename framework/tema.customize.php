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

/**
 * Add Customizer
 
 */
add_action( 'customize_register', function( $wp_customize ) {
    //Redes Sociais
    $wp_customize->add_section( 'tema-redes-sociais' , array(
    'title'      => "Redes Sociais",
        'priority'   => 40,
    ) );
  
        //Facebook
        $wp_customize->add_setting( 'social-facebook', array(
            'default'           => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ) );
        $wp_customize->add_control( 'social-facebook', array(
            'label'    => "Facebook",
            'description' => '',
            'section'  => 'tema-redes-sociais',
            'type' => 'text',
        ) );
  
        //Instagram
        $wp_customize->add_setting( 'social-instagram', array(
            'default'           => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ) );
        $wp_customize->add_control( 'social-instagram', array(
            'label'    => "Instagram",
            'description' => '',
            'section'  => 'tema-redes-sociais',
            'type' => 'text',
        ) );
  
        //Whatsapp
        $wp_customize->add_setting( 'social-whatsapp', array(
            'default'           => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ) );
        $wp_customize->add_control( 'social-whatsapp', array(
            'label'    => "Whatsapp",
            'description' => '',
            'section'  => 'tema-redes-sociais',
            'type' => 'text',
        ) );

            //Whatsapp API
            $wp_customize->add_setting( 'social-whatsapp-api', array(
                'default'           => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            ) );
            $wp_customize->add_control( 'social-whatsapp-api', array(
                'label'    => "Whatsapp API",
                'description' => '',
                'section'  => 'tema-redes-sociais',
                'type' => 'text',
            ) );

    // Email
    $wp_customize->add_section( 'tema-email' , array(
        'title'      => "E-mail",
            'priority'   => 40,
        ) );

    //E-mail
    $wp_customize->add_setting( 'social-email', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'social-email', array(
        'label'    => "E-mail",
        'description' => '',
        'section'  => 'tema-email',
        'type' => 'text',
    ) );

    //Linkedin
    $wp_customize->add_setting( 'social-linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'social-linkedin', array(
        'label'    => "Linkedin",
        'description' => '',
        'section'  => 'tema-redes-sociais',
        'type' => 'text',
    ) );
  
    //Copy 
    $wp_customize->add_section( 'tema-copy-politica' , array(
    'title'      => "Copyright",
        'priority'   => 40,
    ) );
  
    //Copy
    $wp_customize->add_setting( 'copy', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'copy', array(
        'label'    => "Copyright",
        'description' => '',
        'section'  => 'tema-copy-politica',
        'type' => 'text',
    ) );    
  });
?>
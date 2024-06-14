<?php

/** 
 * Custom Menus
 *  
 */

 /**
	* Main Nav Menu
  */
 function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

/**
 * Footer Links
 */
function wpb_footer_new_menu_links() {
  register_nav_menu('my-footer-menu-links',__( 'My Footer Menu Links' ));
}
add_action( 'init', 'wpb_footer_new_menu_links' );

/**
 * Footer Products
 */

 function wpb_footer_new_menu_products() {
  register_nav_menu('my-footer-menu-products',__( 'My Footer Menu Products' ));
}
add_action( 'init', 'wpb_footer_new_menu_products' );


if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) : //TODO fix name
	/**
	 * Register pattern categories
	 *
	 * @since Setos 1.0
	 * @return void
	 */
	function setos_pattern_categories() {

		register_block_pattern_category(
			'setos_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'setos' ),
				'description' => __( 'A collection of full page layouts.', 'setos' ),
			)
		);
	}
endif;

add_action( 'init', 'setos_pattern_categories' );

/**
 * Enqueue styles and scripts
 *
 * @since Setos 1.0
 * @return void
 */

function enqueue_my_styles() {
	/**
	* Header
	*/
	
	/* Vendor */
	wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '', 'all');
	wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), '', 'all');
	wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '', 'all');
	wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), '', 'all');
	wp_enqueue_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), '', 'all');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), '', 'all');
	/* Main CSS */
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
	
	/**
	* Footer
	*/

	/* Vendor */
	wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), '', false);
	wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '', false);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '', false);
	wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '', false);
	wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '', false);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), '', false);
	/* Main JS */
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
}
add_action('wp', 'enqueue_my_styles');

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
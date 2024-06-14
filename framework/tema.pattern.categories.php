<?php
/**
	 * Register pattern categories
	 *
	 * @since Setos 1.0
	 * @return void
	 */

if ( ! function_exists( 'setos_pattern_categories' ) ) : 
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
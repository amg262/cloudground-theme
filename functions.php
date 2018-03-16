<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'parent-style' )
	);
}

//
// Your code goes below
//
class CLG_Options {

	public function acf_options() {
		if ( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page(
				[
					'page_title' => 'BOM Fields',
					'menu_title' => 'BOM Fields',
					'menu_slug'  => 'wc-bom-fields',
					'capability' => 'edit_posts',
					'redirect'   => false,
				] );
		}
	}
}

function scan_movies() {

	$path = '/users/andy/Web/';
	$dirs = scandir( $path, SCANDIR_SORT_NONE );
	var_dump($dirs);

}

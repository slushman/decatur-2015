<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.me/
 *
 * @package DocBlock
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 *
 * @uses 	add_theme_support()
 */
function function_names_jetpack_setup() {

	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );

} // function_names_jetpack_setup()
add_action( 'after_setup_theme', 'function_names_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function function_names__infinite_scroll_render() {

	while ( have_posts() ) {

		the_post();
		get_template_part( 'template-parts/content', get_post_format() );

	}

} // function_names__infinite_scroll_render
<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Four H Starter
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function four_h_starter_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'four_h_starter_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function four_h_starter_jetpack_setup
add_action( 'after_setup_theme', 'four_h_starter_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function four_h_starter_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function four_h_starter_infinite_scroll_render

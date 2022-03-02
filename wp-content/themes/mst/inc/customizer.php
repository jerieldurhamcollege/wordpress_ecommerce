<?php
/**
 * ModernStoreTheme Theme Customizer
 *
 * @package ModernStoreTheme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mst_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'mst_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'mst_customize_partial_blogdescription',
			)
		);
	}

	//
	$wp_customize -> add_section('mst_social_media', array(
		'title' => esc_html__( 'Social Media', 'mst'),
	));
	$wp_customize -> add_setting('mst_facebook_url', array());
	$wp_customize -> add_control('mst_facebook_url', array(
		'label' => 'Facebook URL',
		'section' => 'mst_social_media',
		'description' => 'Enter Facebook URL',
		'type' => 'url',
	));
	$wp_customize -> add_section('mst_social_media', array(
		'title' => esc_html__( 'Social Media', 'mst'),
	));
	$wp_customize -> add_setting('mst_twitter_url', array());
	$wp_customize -> add_control('mst_twitter_url', array(
		'label' => 'Twitter URL',
		'section' => 'mst_social_media',
		'description' => 'Enter Twitter URL',
		'type' => 'url',
	));
	$wp_customize -> add_section('mst_social_media', array(
		'title' => esc_html__( 'Social Media', 'mst'),
	));
	$wp_customize -> add_setting('mst_linkedIn_url', array());
	$wp_customize -> add_control('mst_linkedIn_url', array(
		'label' => 'LinkedIn URL',
		'section' => 'mst_social_media',
		'description' => 'Enter LinkedIn URL',
		'type' => 'url',
	));
	$wp_customize -> add_section('mst_social_media', array(
		'title' => esc_html__( 'Social Media', 'mst'),
	));
	$wp_customize -> add_setting('mst_instagram_url', array());
	$wp_customize -> add_control('mst_instagram_url', array(
		'label' => 'Instagram URL',
		'section' => 'mst_social_media',
		'description' => 'Enter Instagram URL',
		'type' => 'url',
	));
}
add_action( 'customize_register', 'mst_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function mst_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function mst_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mst_customize_preview_js() {
	wp_enqueue_script( 'mst-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'mst_customize_preview_js' );

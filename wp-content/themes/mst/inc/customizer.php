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
	$wp_customize -> add_panel('mst_social_media', array(
		'title' => esc_html__( 'Social Media', 'mst')
	));
	$wp_customize -> add_panel('mst_footer_settings', array(
		'title' => esc_html__( 'Footer', 'mst')
	));
	$wp_customize -> add_section('mst_footer_copyright', array(
		'title' => esc_html__( 'Footer Copyright', 'mst'),
		'panel' => 'mst_footer_settings',
	));
	$wp_customize -> add_setting('mst_footer_copyright_text', array());
	$wp_customize -> add_control('mst_footer_copyright_text', array(
		'label' => 'Copytight Text',
		'section' => 'mst_footer_copyright',
		'description' => 'Enter Copyright Text',
	));
	$wp_customize -> add_section('mst_facebook_media', array(
		'title' => esc_html__( 'Facebook', 'mst'),
		'panel' => 'mst_social_media',
	));
	$wp_customize -> add_section('mst_twitter_media', array(
		'title' => esc_html__( 'Twitter', 'mst'),
		'panel' => 'mst_social_media',
	));
	$wp_customize -> add_section('mst_linkedIn_media', array(
		'title' => esc_html__( 'LinkedIn', 'mst'),
		'panel' => 'mst_social_media',
	));
	$wp_customize -> add_section('mst_instagram_media', array(
		'title' => esc_html__( 'Instagram', 'mst'),
		'panel' => 'mst_social_media',
	));

	$wp_customize -> add_setting('mst_social_menu_links_facebook_url', array());
	$wp_customize -> add_control('mst_social_menu_links_facebook_url', array(
		'label' => 'URL',
		'section' => 'mst_facebook_media',
		'description' => 'Enter Facebook URL',
		'type' => 'url',
	));
	$wp_customize -> add_setting('mst_social_menu_links_facebook_fontawesome', array());
	$wp_customize -> add_control('mst_social_menu_links_facebook_fontawesome', array(
		'label' => 'Fontawesome Icon',
		'section' => 'mst_facebook_media',
		'description' => 'Enter Favicon Icon Tag here',
		'type' => 'url',
	));
	$wp_customize -> add_setting('mst_social_menu_links_facebook_icon', array());
	$wp_customize -> add_control( new WP_Customize_Media_Control($wp_customize,'mst_social_menu_links_facebook_icon', array(
		'label' => 'Icon',
		'section' => 'mst_facebook_media',
		'description' => 'Select/Upload Icon (leave Favicon empty)',
	)));
	$wp_customize -> add_setting('mst_social_menu_links_twitter_url', array());
	$wp_customize -> add_control('mst_social_menu_links_twitter_url', array(
		'label' => 'URL',
		'section' => 'mst_twitter_media',
		'description' => 'Enter Twitter URL',
		'type' => 'url',
	));
	$wp_customize -> add_setting('mst_social_menu_links_twitter_fontawesome', array());
	$wp_customize -> add_control('mst_social_menu_links_twitter_fontawesome', array(
		'label' => 'Fontawesome Icon',
		'section' => 'mst_twitter_media',
		'description' => 'Enter Favicon Icon Tag here',
		'type' => 'url',
	));
	$wp_customize -> add_setting('mst_social_menu_links_twitter_icon', array());
	$wp_customize -> add_control( new WP_Customize_Media_Control($wp_customize,'mst_social_menu_links_twitter_icon', array(
		'label' => 'Icon',
		'section' => 'mst_twitter_media',
		'description' => 'Select/Upload Icon (leave Favicon empty)',
	)));
	$wp_customize -> add_setting('mst_social_menu_links_linkedIn_url', array());
	$wp_customize -> add_control('mst_social_menu_links_linkedIn_url', array(
		'label' => 'URL',
		'section' => 'mst_linkedIn_media',
		'description' => 'Enter LinkedIn URL',
		'type' => 'url',
	));
	$wp_customize -> add_setting('mst_social_menu_links_linkedIn_fontawesome', array());
	$wp_customize -> add_control('mst_social_menu_links_linkedIn_fontawesome', array(
		'label' => 'Fontawesome Icon',
		'section' => 'mst_linkedIn_media',
		'description' => 'Enter Favicon Icon Tag here',
		'type' => 'url',
	));
	$wp_customize -> add_setting('mst_social_menu_links_linkedIn_icon', array());
	$wp_customize -> add_control( new WP_Customize_Media_Control($wp_customize,'mst_social_menu_links_linkedIn_icon', array(
		'label' => 'Icon',
		'section' => 'mst_linkedIn_media',
		'description' => 'Select/Upload Icon (leave Favicon empty)',
	)));
	$wp_customize -> add_setting('mst_social_menu_links_instagram_url', array());
	$wp_customize -> add_control('mst_social_menu_links_instagram_url', array(
		'label' => 'URL',
		'section' => 'mst_instagram_media',
		'description' => 'Enter Instagram URL',
		'type' => 'url',
	));
	$wp_customize -> add_setting('mst_social_menu_links_instagram_fontawesome', array());
	$wp_customize -> add_control('mst_social_menu_links_instagram_fontawesome', array(
		'label' => 'Fontawesome Icon',
		'section' => 'mst_instagram_media',
		'description' => 'Enter Favicon Icon Tag here',
		'type' => 'url',
	));
	$wp_customize -> add_setting('mst_social_menu_links_instagram_icon', array());
	$wp_customize -> add_control( new WP_Customize_Media_Control($wp_customize, 'mst_social_menu_links_instagram_icon', array(
		'label' => 'Icon',
		'section' => 'mst_instagram_media',
		'description' => 'Select/Upload Icon (leave Favicon empty)',
	)));
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

<?php
/**
 * TechIT Theme Customizer
 *
 * @package TechIT
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function techit_test_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'techit_test_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'techit_test_customize_partial_blogdescription',
			)
		);
	}


	/**
	 * Footer & Navigation Panel
	 */
	$wp_customize->add_panel( 'footer_navigation_panel',
		array(
			'title' => __( 'Footer & Navigation' ),
			'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), 
			'priority' => 50,
			'capability' => 'edit_theme_options', 
			'theme_supports' => '', 
			'active_callback' => '', 
		)
	);

	/**
	 *  Footer & Navigation Section
	 */
	$wp_customize->add_section( 'footer_navigation_section',
		array(
			'title' => __( 'Footer Section' ),
			'description' => esc_html__( 'Adjust your Header and Navigation sections.' ),
			'panel' => 'footer_navigation_panel', 
		)
	);

	/**
	 * Footer & Navigation Settings For Footer Menu link 1
	 */
	$wp_customize->add_setting( 'footer_menu_link_1');

	/**
	 * Footer & Navigation Section For Footer Menu link 1
	 */
	$wp_customize->add_control( 'footer_menu_link_1',
		array(
		'label' => __('Footer Menu link 1' ),
		'description' => esc_html__( 'Enter Footer Menu link 1 text that shows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( 
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Footer & Navigation Settings For Footer Menu link 2
	 */
	$wp_customize->add_setting( 'footer_menu_link_2');

	/**
	 * Footer & Navigation Section For Footer Menu link 2
	 */
	$wp_customize->add_control( 'footer_menu_link_2',
		array(
		'label' => __('Footer Menu link 2' ),
		'description' => esc_html__( 'Enter Footer Menu link 2 text that shows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( 
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Footer & Navigation Settings For Footer Sales Heading
	 */
	$wp_customize->add_setting( 'footer_sales_heading');

	/**
	 * Add our Footer & Navigation Section For Footer Sales Heading
	 */
	$wp_customize->add_control( 'footer_sales_heading',
		array(
		'label' => __( 'Footer Sales Heading' ),
		'description' => esc_html__( 'Enter footer sales heading text that shows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( 
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Footer & Navigation Settings For Footer Sales Hotles
	 */
	$wp_customize->add_setting( 'footer_sales_hotles');

	/**
	 * Footer & Navigation Section For Footer Sales Hotles
	 */
	$wp_customize->add_control( 'footer_sales_hotles',
		array(
		'label' => __( 'Footer Sales Hotles' ),
		'description' => esc_html__( 'Enter Sales Hotles text that shows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( 
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Footer & Navigation Settings For Footer Address Text
	 */
	$wp_customize->add_setting( 'footer_address_text');

	/**
	 * Footer & Navigation Section For Footer Address Text
	 */
	$wp_customize->add_control( 'footer_address_text',
		array(
		'label' => __( 'Footer Address Text' ),
		'description' => esc_html__( 'Enter address text that shows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( 
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Footer & Navigation Settings For Footer Social Icon
	 */
	$wp_customize->add_setting( 'footer_social_icon');

	/**
	 * Footer & Navigation Section For Footer Social Icon
	 */
	$wp_customize->add_control( 'footer_social_icon',
		array(
		'label' => __( 'Footer Social Icon' ),
		'description' => esc_html__( 'Enter the social icons that appears in the footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( 
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Footer & Navigation Settings For Footer Social Link1
	 */
	$wp_customize->add_setting( 'footer_social_link1');

	/**
	 * Footer & Navigation Section For Footer Social Link1
	 */
	$wp_customize->add_control( 'footer_social_link1',
		array(
		'label' => __( 'Footer Social Link1' ),
		'description' => esc_html__( 'Enter the social link that appears in the footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( 
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Footer & Navigation Settings For Footer Social Link2
	 */
	$wp_customize->add_setting( 'footer_social_link2');

	/**
	 * Footer & Navigation Section For Footer Social Link2
	 */
	$wp_customize->add_control( 'footer_social_link2',
		array(
		'label' => __( 'Footer Social Link2' ),
		'description' => esc_html__( 'Enter the social link that appears in the footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( 
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Footer & Navigation Settings For Footer Social Link3
	 */
	$wp_customize->add_setting( 'footer_social_link3');

	/**
	 * Footer & Navigation Section For Footer Social Link3
	 */
	$wp_customize->add_control( 'footer_social_link3',
		array(
		'label' => __( 'Footer Social Link3' ),
		'description' => esc_html__( 'Enter the last social link that appears in the footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( 
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Footer & Navigation Settings For Footer Copywright
	 */
	$wp_customize->add_setting( 'footer_copywright');

	/**
	 * Footer & Navigation Section For Footer Copywright
	 */
	$wp_customize->add_control( 'footer_copywright',
		array(
		'label' => __( 'Footer Copywright' ),
		'description' => esc_html__( 'Enter the copyywright text that appears in the footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( 
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);


}

add_action( 'customize_register', 'techit_test_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function techit_test_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function techit_test_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function techit_test_customize_preview_js() {
	wp_enqueue_script( 'techit_test-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'techit_test_customize_preview_js' );

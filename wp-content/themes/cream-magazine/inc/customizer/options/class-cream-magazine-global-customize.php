<?php
/**
 * Customize sections and settings for global options.
 *
 * @since 2.0.0
 *
 * @package Cream_Magazine
 */

if ( ! class_exists( 'Cream_Magazine_Global_Customize' ) ) {
	/**
	 * Define and register sections and settings for global options.
	 *
	 * @since 2.0.0
	 *
	 * @package Cream_Magazine
	 */
	class Cream_Magazine_Global_Customize {

		/**
		 * Register sections and settings.
		 *
		 * @since  1.0.0
		 */
		public function __construct() {

			add_action( 'customize_register', array( $this, 'register_sections' ) );

			add_action( 'customize_register', array( $this, 'register_settings' ) );
		}

		/**
		 * Sets up the customizer sections.
		 *
		 * @since  2.0.0
		 *
		 * @param object $wp_customize WP Customize Manager instance.
		 */
		public function register_sections( $wp_customize ) {

			$wp_customize->add_section(
				'cream_magazine_value_options',
				array(
					'title' => esc_html__( 'Option&rsquo;s Value', 'cream-magazine' ),
					'panel' => 'cream_magazine_global_customization',
				)
			);

			$wp_customize->add_section(
				'cream_magazine_link_options',
				array(
					'title' => esc_html__( 'Links', 'cream-magazine' ),
					'panel' => 'cream_magazine_global_customization',
				)
			);
		}

		/**
		 * Sets up the customizer sections.
		 *
		 * @since  2.0.0
		 *
		 * @param object $wp_customize WP Customize Manager instance.
		 */
		public function register_settings( $wp_customize ) {

			$defaults = cream_magazine_get_default_theme_options();

			$wp_customize->add_setting(
				'cream_magazine_save_value_as',
				array(
					'sanitize_callback' => 'cream_magazine_sanitize_select',
					'default'           => $defaults['cream_magazine_save_value_as'],
				)
			);

			$wp_customize->add_control(
				'cream_magazine_save_value_as',
				array(
					'label'       => esc_html__( 'Save Option&rsquo;s Value As', 'cream-magazine' ),
					'description' => esc_html__( 'This option lets you save value of category, page, post, etc. either as slug or id. Select ID if your site language is other than English. Reresh the page once this option is changed.', 'cream-magazine' ),
					'section'     => 'cream_magazine_value_options',
					'type'        => 'select',
					'choices'     => cream_magazine_save_value_as(),
				)
			);

			$wp_customize->add_setting(
				'cream_magazine_disable_link_focus_outline',
				array(
					'sanitize_callback' => 'wp_validate_boolean',
					'default'           => $defaults['cream_magazine_disable_link_focus_outline'],
				)
			);

			$wp_customize->add_control(
				new Cream_Magazine_Toggle_Switch_Control(
					$wp_customize,
					'cream_magazine_disable_link_focus_outline',
					array(
						'label'   => esc_html__( 'Disable Outline On Link Focus', 'cream-magazine' ),
						'section' => 'cream_magazine_link_options',
						'type'    => 'checkbox',
					)
				)
			);

			$wp_customize->add_setting(
				'cream_magazine_disable_link_decoration_on_hover',
				array(
					'sanitize_callback' => 'wp_validate_boolean',
					'default'           => $defaults['cream_magazine_disable_link_decoration_on_hover'],
				)
			);

			$wp_customize->add_control(
				new Cream_Magazine_Toggle_Switch_Control(
					$wp_customize,
					'cream_magazine_disable_link_decoration_on_hover',
					array(
						'label'   => esc_html__( 'Disable Underline Link On Hover', 'cream-magazine' ),
						'section' => 'cream_magazine_link_options',
						'type'    => 'checkbox',
					)
				)
			);
		}
	}
}

new Cream_Magazine_Global_Customize();

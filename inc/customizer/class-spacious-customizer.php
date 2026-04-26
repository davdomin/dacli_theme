<?php
/**
 * DacliWeb customizer class for theme customize options.
 *
 * Class DacliWeb_Customizer
 *
 * @package    ale8bits
 * @subpackage DacliWeb
 * @since      DacliWeb 1.9.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include the customizer framework files.
require( dirname( __FILE__ ) . '/core/class-spacious-customizer-framework.php' );
require( dirname( __FILE__ ) . '/core/class-spacious-customize-base-option.php' );

/**
 * DacliWeb customizer class.
 *
 * Class DacliWeb_Customizer
 */
class DacliWeb_Customizer {

	/**
	 * Customizer setup constructor.
	 *
	 * DacliWeb_Customizer constructor.
	 */
	public function __construct() {

		// Include the required files for Customize option.
		add_action( 'customize_register', array( $this, 'customize_register' ), 12 );

		// Include the required files for Customize option.
		add_action( 'customize_register', array( $this, 'customize_options_file_include' ), 1 );

	}

	/**
	 * Include the required files for extending the custom Customize controls.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function customize_custom_panels_sections_includes( $wp_customize ) {

		// Include the required customizer nested panels and sections files.
		require SPACIOUS_CUSTOMIZER_DIR . '/extend-customizer/class-spacious-upsell-section.php';

	}

	/**
	 * Include the required files for extending the custom Customize controls.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function customize_register( $wp_customize ) {

		// Override default.
		require SPACIOUS_CUSTOMIZER_DIR . '/override-defaults.php';

	}

	/**
	 * Register DacliWeb customize panels, sections and controls type.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function register_panels_sections_controls( $wp_customize ) {

		// Register panels and sections.
		$wp_customize->register_panel_type( 'DacliWeb_WP_Customize_Panel' );
		$wp_customize->register_section_type( 'DacliWeb_WP_Customize_Section' );
		$wp_customize->register_section_type( 'DacliWeb_Upsell_Section' );

		/**
		 * Register controls.
		 */
		/**
		 * WordPress default controls.
		 */
		// Checkbox control.
		DacliWeb_Customize_Base_Control::add_control(
			'checkbox',
			array(
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_checkbox',
				),
			)
		);

		// Radio control.
		DacliWeb_Customize_Base_Control::add_control(
			'radio',
			array(
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_radio_select',
				),
			)
		);

		// Select control.
		DacliWeb_Customize_Base_Control::add_control(
			'select',
			array(
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_radio_select',
				),
			)
		);

		// Text control.
		DacliWeb_Customize_Base_Control::add_control(
			'text',
			array(
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_nohtml',
				),
			)
		);

		// Number control.
		DacliWeb_Customize_Base_Control::add_control(
			'number',
			array(
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_number',
				),
			)
		);

		// Email control.
		DacliWeb_Customize_Base_Control::add_control(
			'email',
			array(
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_email',
				),
			)
		);

		// URL control.
		DacliWeb_Customize_Base_Control::add_control(
			'url',
			array(
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_url',
				),
			)
		);

		// Textarea control.
		DacliWeb_Customize_Base_Control::add_control(
			'textarea',
			array(
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_html',
				),
			)
		);

		// Dropdown pages control.
		DacliWeb_Customize_Base_Control::add_control(
			'dropdown-pages',
			array(
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_dropdown_pages',
				),
			)
		);

		// Color control.
		DacliWeb_Customize_Base_Control::add_control(
			'color',
			array(
				'callback'          => 'WP_Customize_Color_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_hex_color',
				),
			)
		);

		// Image upload control.
		DacliWeb_Customize_Base_Control::add_control(
			'image',
			array(
				'callback'          => 'WP_Customize_Image_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_image_upload',
				),
			)
		);

		// Radio image control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-radio-image',
			array(
				'callback'          => 'DacliWeb_Radio_Image_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_radio_select',
				),
			)
		);

		// Heading control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-heading',
			array(
				'callback'          => 'DacliWeb_Heading_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_false_values',
				),
			)
		);

		// Editor control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-editor',
			array(
				'callback'          => 'DacliWeb_Editor_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_html',
				),
			)
		);

		// Color control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-color',
			array(
				'callback'          => 'DacliWeb_Color_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_alpha_color',
				),
			)
		);

		// Buttonset control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-buttonset',
			array(
				'callback'          => 'DacliWeb_Buttonset_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_radio_select',
				),
			)
		);

		// Toggle control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-toggle',
			array(
				'callback'          => 'DacliWeb_Toggle_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_checkbox',
				),
			)
		);

		// Divider control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-divider',
			array(
				'callback'          => 'DacliWeb_Divider_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_false_values',
				),
			)
		);

		// Slider control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-slider',
			array(
				'callback'          => 'DacliWeb_Slider_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_number',
				),
			)
		);

		// Custom control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-custom',
			array(
				'callback'          => 'DacliWeb_Custom_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_false_values',
				),
			)
		);

		// Dropdown categories control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-dropdown-categories',
			array(
				'callback'          => 'DacliWeb_Dropdown_Categories_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_dropdown_categories',
				),
			)
		);

		// Background control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-background',
			array(
				'callback'          => 'DacliWeb_Background_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_background',
				),
			)
		);

		// Typography control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-typography',
			array(
				'callback'          => 'DacliWeb_Typography_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_typography',
				),
			)
		);

		// Hidden control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-hidden',
			array(
				'callback'          => 'DacliWeb_Hidden_Control',
				'sanitize_callback' => '',
			)
		);

		// Sortable control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-sortable',
			array(
				'callback'          => 'DacliWeb_Sortable_Control',
				'sanitize_callback' => array(
					'DacliWeb_Customizer_Sanitizes',
					'sanitize_sortable',
				),
			)
		);

		// Group control.
		DacliWeb_Customize_Base_Control::add_control(
			'spacious-group',
			array(
				'callback' => 'DacliWeb_Group_Control',
			)
		);

	}

	/**
	 * Include the required files for Customize option.
	 */
	public function customize_options_file_include() {

		// Include the required customize section and panels register file.
		require SPACIOUS_CUSTOMIZER_DIR . '/class-spacious-customizer-register-sections-panels.php';

		/**
		 * Include the required customize options file.
		 */
		// Global.
		require SPACIOUS_CUSTOMIZER_DIR . '/options/global/class-spacious-customize-colors-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/global/class-spacious-customize-background-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/global/class-spacious-customize-typography-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/global/class-spacious-customize-layout-options.php';

		// Header.
		require SPACIOUS_CUSTOMIZER_DIR . '/options/header/class-spacious-customize-site-identity-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/header/class-spacious-customize-header-media-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/header/class-spacious-customize-header-top-bar-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/header/class-spacious-customize-primary-header-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/header/class-spacious-customize-primary-menu-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/header/class-spacious-customize-header-button.php';

		// Slider.
		require SPACIOUS_CUSTOMIZER_DIR . '/options/slider/class-spacious-customize-slider-options.php';

		// Content.
		require SPACIOUS_CUSTOMIZER_DIR . '/options/content/class-spacious-customize-page-header-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/content/class-spacious-customize-blog-archive-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/content/class-spacious-customize-single-post-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/content/class-spacious-customize-page-options.php';

		// Additional.
		require SPACIOUS_CUSTOMIZER_DIR . '/options/social/class-spacious-customize-social-icons-options.php';

		// Footer.
		require SPACIOUS_CUSTOMIZER_DIR . '/options/footer/class-spacious-customize-footer-widgets-area-options.php';

		// WooCommerce.
		require SPACIOUS_CUSTOMIZER_DIR . '/options/woocommerce/class-spacious-customize-woocommerce-sidebar-options.php';
		require SPACIOUS_CUSTOMIZER_DIR . '/options/woocommerce/class-spacious-customize-woocommerce-design-options.php';
	}

}

return new DacliWeb_Customizer();

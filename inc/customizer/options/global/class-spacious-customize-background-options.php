<?php
/**
 * Class to include Background customize options.
 *
 * Class DacliWeb_Customize_Background_Options
 *
 * @package    ale8bits
 * @subpackage DacliWeb
 * @since      DacliWeb 1.9.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class to include Background customize option.
 *
 * Class DacliWeb_Customize_Background_Options
 */
class DacliWeb_Customize_Background_Options extends DacliWeb_Customize_Base_Option {

	/**
	 * Include customize options.
	 *
	 * @param array $options Customize options provided via the theme.
	 * @param \WP_Customize_Manager $wp_customize Theme Customizer object.
	 *
	 * @return mixed|void Customizer options for registering panels, sections as well as controls.
	 */

	public function register_options( $options, $wp_customize ) {

		$configs = array(

			/**
			 * Global color background options.
			 */
			// Outside container design options heading separator.
			array(
				'name'     => 'global_background_heading',
				'type'     => 'control',
				'control'  => 'spacious-title',
				'label'    => esc_html__( 'Outside Container', 'spacious' ),
				'section'  => 'spacious_global_background_section',
				'priority' => 15,
			),

		);

		$options = array_merge( $options, $configs );

		return $options;
	}

}

return new DacliWeb_Customize_Background_Options();

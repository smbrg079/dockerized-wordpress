<?php
/**
 * Controller for rendering the block.
 * 
 * @since 3.0.0-beta.1
 *
 * @package Spectra\Blocks\CountdownChildNumber
 */

use Spectra\Helpers\BlockAttributes;

// Define the ARIA role for accessibility, indicating this is a timer region.
$label_role = 'timer';

// Style and class configurations.
$config = array(
	array( 'key' => 'numberColor' ),
	array( 'key' => 'numberColorHover' ),
	array( 'key' => 'backgroundColor' ),
	array( 'key' => 'backgroundColorHover' ),
	array( 'key' => 'backgroundGradient' ),
	array( 'key' => 'backgroundGradientHover' ),
);

$extra_attributes = array(
	'role' => $label_role,
);

// Get the block wrapper attributes, and extend the styles and classes.
$wrapper_attributes = BlockAttributes::get_wrapper_attributes( $attributes, $config, $extra_attributes );

// return the view.
return 'file:./view.php';


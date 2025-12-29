<?php
/**
 * View for rendering the block.
 * 
 * @since 3.0.0-beta.1
 *
 * @package Spectra\Blocks\ModalChildTriggerButton
 */

use Spectra\Helpers\BlockAttributes;
use Spectra\Helpers\Core;

// The main attributes that need to exist.
$text = $attributes['text'] ?? '';
$icon = $attributes['icon'] ?? null;

// If the main attributes do not exist, abandon ship.
if ( ! $text && ! isset( $icon ) ) {
	return;
}

// Ensure attributes exist.
$anchor        = $attributes['anchor'] ?? '';
$show_text     = $attributes['showText'] ?? true;
$icon_position = $attributes['iconPosition'] ?? 'after';
$size          = $attributes['size'] ?? '16px';
$flip_for_rtl  = $attributes['flipForRTL'] ?? false;
$aria_label    = ( ! $show_text && ! empty( $text ) ) ? $text : '';
$modal_trigger = $attributes['modalTrigger'] ?? ( $block->context['spectra/modal/modalTrigger'] ?? '' );

// Icon colors.
$icon_color       = $attributes['iconColor'] ?? '';
$icon_color_hover = $attributes['iconColorHover'] ?? '';

// Define base classes.
$icon_classes = array(
	'spectra-button__icon',
	"spectra-button__icon-position-$icon_position",
	$icon_color ? 'spectra-icon-color' : '',
	$icon_color_hover ? 'spectra-icon-color-hover' : '',
);

// Add the default specific icon props.
$icon_props = array(
	'class'     => Core::concatenate_array( $icon_classes ),
	'focusable' => 'false',
);

// Style and class configurations.
$config = array(
	array( 'key' => 'textColor' ),
	array( 'key' => 'textColorHover' ),
	array( 'key' => 'backgroundColor' ),
	array( 'key' => 'backgroundColorHover' ),
	array( 'key' => 'backgroundGradient' ),
	array( 'key' => 'backgroundGradientHover' ),
	array(
		'key'        => 'iconColor',
		'class_name' => null,
	),
	array(
		'key'        => 'iconColorHover',
		'class_name' => null,
	),
);

// Base classes.
$custom_classes = array(
	'button' !== $modal_trigger ? 'is-hidden' : '', 
	'wp-block-button',
	'wp-block-button__link wp-element-button',
	'modal-trigger-element',
);

// Get the block wrapper attributes, and extend the styles and classes.
$wrapper_attributes = BlockAttributes::get_wrapper_attributes( $attributes, $config, array( 'id' => $anchor ), $custom_classes );

// return the view.
return 'file:./view.php';

<?php
/**
 * View for rendering the block.
 * 
 * @since 3.0.0-beta.1
 * 
 * @package Spectra\Blocks\Accordion
 */

use Spectra\Helpers\HtmlSanitizer;

// Set the attributes with fallback if required.
$anchor = $attributes['anchor'] ?? '';

// Set the contexts required for the accordion wrapper.
$accordion_contexts = array(
	'activeItem' => '', // Stores the last opened child item.
);

// Get the block wrapper attributes, and extend the styles and classes.
$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'id' => $anchor,
	)
);

?>
<div
	<?php echo wp_kses_data( $wrapper_attributes ); ?>
	data-wp-interactive="spectra/accordion"
	<?php echo wp_kses_data( wp_interactivity_data_wp_context( $accordion_contexts, 'spectra/accordion' ) ); ?>
>
	<?php HtmlSanitizer::render( $content ); ?>
</div>

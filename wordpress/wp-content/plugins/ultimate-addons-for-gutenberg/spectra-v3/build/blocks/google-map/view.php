<?php
/**
 * View file for rendering the Google Map block.
 * 
 * @since 3.0.0-beta.1
 *
 * @package Spectra\Blocks\GoogleMap
 */

?>
<div <?php echo wp_kses_data( $wrapper_attributes ); ?>>
	<iframe
		class="spectra-google-map__iframe"
		title="<?php echo esc_attr__( 'Google Map for ', 'ultimate-addons-for-gutenberg' ) . esc_attr( $address ); ?>"
		src="<?php echo esc_url( $map_url ); ?>"
		width="100%"
		height="100%"
		style="border: 0;"
		allowfullscreen=""
		loading="lazy"
		referrerpolicy="no-referrer-when-downgrade"
	></iframe>
</div>
